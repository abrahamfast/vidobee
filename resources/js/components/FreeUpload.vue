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
              <div class="form-group">
                <input type="email" class="form-control" name="sign-up-email" placeholder="Email Address">
              </div>
              <div class="form-group">
                <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"  :use-custom-dropzone-options="true"></vue-dropzone>
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
            console.log('Component mounted.')
        },
         components: {
          vueDropzone: vue2Dropzone
        },
        data: function () {
          return {
            dropzoneOptions: {
                url: 'https://video.platform.snapycloud.com/api/v1/Video/uploading',
                thumbnailWidth: 200,
                autoProcessQueue: true,
                uploadMultiple: true,
                method: 'POST',
                maxFilesize: 300,
                // chunking: true
            }
          }
        },
          methods: {
            change: function () {
              console.log('change')
              let _self = this
              let resumable = this.$refs.resumable
              resumable.files.forEach(file => {
                if (file.url) {
                  _self.imgList.push(file)
                }
              })
            },
            upload: function () {
              console.log('App upload')
              this.$refs.resumable.upload()
            }
          }

    }
</script>
