<template>
    <div class="modal fade" id="free-upload-proccess" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header text-center border-0">
            <div class="w-100 pt-4">
              <h5 class="h3">Progress</h5>
              <p>Please wait for initializing video then get embed code</p>
              <h2 class="text-primary mb-2" data-countup data-start="0" data-end="100" data-duration="500" data-decimal-places="" data-prefix="progress " data-separator="," data-grouping="true" data-suffix="" data-easing="false"></h2>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                <img src="/assets/img/icons/interface/icon-x.svg" alt="Icon">
              </span>
            </button>
          </div>
          <div class="modal-body px-md-4 px-lg-5 pb-4 pb-lg-5">
              <a :href="link" class="btn btn-primary btn-block">embed Code</a>
            <div class="text-center text-small mt-3">
              Already have an account? <a href="/signup">Sign in here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>

    export default {
        mounted() {
            this.link = this.$root.baseUrl + "/video/" + this.$root.baseModel;
        },
        data: function () {
          return {
            link: ''
          }
        },
          methods: {
          }

    }
</script>
