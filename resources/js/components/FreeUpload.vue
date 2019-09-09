<template>
    <div class="modal fade" id="free-upload" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header text-center border-0">
            <div class="w-100 pt-4">
              <h5 class="h3">Sign Up</h5>
              <div>No credit card required</div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                <img src="assets/img/icons/interface/icon-x.svg" alt="Icon">
              </span>
            </button>
          </div>
          <div class="modal-body px-md-4 px-lg-5 pb-4 pb-lg-5">
            <form method="POST">

              <div class="box panel panel-default panel-default">
    <div class="box-body panel-body  panel-body-form">
    <label class="control-label" data-name="upload-larg-file">
        <span class="label-text">Upload Video File</span><span class="required-sign"> *</span> </label>
    <br>
         <div class="btn-group">
            <button type="button" class="btn btn-sm info" aria-label="Add file" id="add-file-btn">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Select file
            </button>
            <button type="button" class="btn btn-sm info" aria-label="Start upload" @click="upload" id="start-upload-btn">
                <span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Start upload
            </button>
            <button type="button" class="btn btn-sm info" aria-label="Pause upload" @click="pause" id="pause-upload-btn">
                <span class="glyphicon glyphicon-pause " aria-hidden="true"></span> Pause upload
            </button>
         </div>

         <div class="">
            <p>
                <div class="progress hide" id="upload-progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"   style="width: 0%">
                        <span class="sr-only"></span>
                    </div>
                </div>
            </p>
         </div>
    </div>
</div>


              <div class="form-group">
                <input type="email" class="form-control" name="sign-up-email" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="sign-up-password" placeholder="Password">
                <small>Password must be at least 8 characters</small>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="sign-up-password-confirm" placeholder="Confirm Password">
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox text-small">
                  <input type="checkbox" class="custom-control-input" id="sign-up-agree">
                  <label class="custom-control-label" for="sign-up-agree">I agree to the <a target="_blank" href="utility-legal-terms.html">Terms &amp; Conditions</a>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit">Create Account</button>
            </form>
            <div class="text-center text-small mt-3">
              Already have an account? <a href="account-sign-in-simple.html">Sign in here</a>
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
             window.r = new R({
                     target: 'https://video.platform.snapycloud.com/api/v1/Video/upload',
                      testChunks: false,
                      headers: {
                        "X-Api-Key": "d00706349b21de2a0addd0c56d0ebef3"
                      }
                    });

             const progressBar = new ProgressBar($('#upload-progress'));
             r.on('fileAdded', function(file, event){
                  progressBar.fileAdded();
              });

              r.on('fileSuccess', function(file, message){
                  progressBar.finish();
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
        data: function () {
          return {
            
          }
        },
          methods: {
            change: function () {
              
            },
            upload: function () {
              console.log('App upload')
              r.upload()
            },
            pause: function(){
                if (r.files.length>0) {
                    if (r.isUploading()) {
                        return  r.pause();
                    }

                    return r.upload();
                }
            }
          }

    }
</script>
