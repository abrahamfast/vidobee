<template>
    <div class="modal fade" id="free-upload" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header text-center border-0">
            <div class="w-100 pt-4">
              <h5 class="h3">Upload</h5>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                <img src="/assets/img/icons/interface/icon-x.svg" alt="Icon">
              </span>
            </button>
          </div>
          <div class="modal-body px-md-4 px-lg-5 pb-4 pb-lg-5">
            <form method="POST">
              <div class="form-group" v-if="limitUpload">
                <div class="alert alert-danger" role="alert">
                  Oops Please Select Your File
                </div>
              </div>

              <div class="form-group" v-if="limitSize">
                <div class="alert alert-danger" role="alert">
                  Oops Size is Big
                </div>
              </div>

              <div class="form-group" v-if="limitType">
                <div class="alert alert-danger" role="alert">
                  Type is incorrect. select MP4, mkv, webmd
                </div>
              </div>

              <div class="form-group" v-if="finish">
                <div class="alert alert-success" role="alert">
                  {{fileName}} Upload Success
                </div>
              </div>

              <div class="form-group" v-if="!finish">
                <label for="labelled-input">Upload Video File</label>
                <div class="btn-group">
                  <button type="button" class="btn btn-outline-primary" aria-label="Add file" id="add-file-btn">
                     Select file
                  </button>
                  <button type="button" class="btn btn-outline-primary" aria-label="Start upload" @click="upload" id="start-upload-btn">
                     Start upload
                  </button>
                  <button type="button" class="btn btn-outline-primary" aria-label="Pause upload" @click="pause" id="pause-upload-btn">
                     Pause upload
                  </button>
               </div>
                        <div class="">
            <p>
                <div class="progress" id="upload-progress" hidden>
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"   style="width: 0%">
                        <span class="sr-only"></span>
                    </div>
                </div>
            </p>
         </div>
              </div>

            
              <button class="btn btn-primary btn-block" type="submit" @click="next" :disabled="disabled === true" >Next</button>
            </form>
            <div class="text-center text-small mt-3">
              Already have an account? <a href="/signup">Sign in here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
import vue2Dropzone from 'vue2-dropzone';
import 'vue2-dropzone/dist/vue2Dropzone.min.css'

    export default {
        mounted() {
             let self = this;
             window.r = new R({
                      target: 'https://vidobee.com/api/uploading',
                      testChunks: false,
                      // chunkSize: 2000000
                    });

              this.init();
        },
        data: function () {
          return {
            mimeType: [
              'video/mp4', 'video/mkv', 'video/x-msvideo', 'video/mpeg', 'video/webm', 'video/mp2t'
            ],
            finish: false,
            fileName: '',
            fileSize: '',
            fileType: '',
            limitSize: false,
            limitType: false,
            info: false,
            limitUpload: false,
            // @TODO need next button first time disabled
            disabled: false
          }
        },
          methods: {
            next: function(){
              if(this.finish) {
                $('#free-upload').modal('hide')
                $('#free-upload-step-two').modal('show')
              } else {
                this.limitUpload = true
              }
                
            },
            init: function () {
                let self = this;
                const progressBar = new ProgressBar($('#upload-progress'));
               r.on('fileAdded', function(file, event){
                    self.limitUpload = false;
                    self.fileName = r.getName();
                    self.fileSize = r.getSize();
                    self.fileType = r.getType();
                    self.hiddMessage()
                    if(self.checkMime()) {
                      self.limitType = false;
                      progressBar.fileAdded();
                    } else {
                      self.limitType = true;
                    }
                    
                    
                });

                r.on('fileSuccess', function(file, message){
                    progressBar.finish();

                    HTTP.post('api/attachment', {
                      field: "video",
                      name: self.fileName,
                      relatedType: 'Video',
                      role: "Attachment",
                      type: self.fileType,
                      size: self.fileSize
                    })
                    .then(function(response){
                      self.info = response
                      console.log(response)
                      console.log(self.info)
                      console.log(self.info.data)
                      console.log(self.info.data.id)
                    });
                    
                    self.$root.baseModel = self.info.data

                    self.finish = true;
                    self.disabled = false
                });

                  r.on('progress', function(){ 
                      progressBar.uploading(r.progress()*100);
                      $('#pause-upload-btn').find('.glyphicon').removeClass('glyphicon-play').addClass('glyphicon-pause');
                   });

                r.on('pause', function(){
                    $('#pause-upload-btn').find('.glyphicon').removeClass('glyphicon-pause').addClass('glyphicon-play');
                });

                r.assignBrowse(document.getElementById('add-file-btn'));
            },
            upload: function () {
              let limitSize = 100000000;
              if( limitSize > this.fileSize  ){
                  r.upload()  
              } else {
                this.limitSize = true;
              }
              
            },
            pause: function(){
                if (r.files.length>0) {
                    if (r.isUploading()) {
                        return  r.pause();
                    }
                    return r.upload();
                }
            },
            checkMime(){
                let result =  this.mimeType.indexOf(this.fileType);
                if(result == '-1'){
                  return false;  
                }
                return true;
            },
            hiddMessage(){
              this.limitSize = false;
            }
          }

    }
</script>
