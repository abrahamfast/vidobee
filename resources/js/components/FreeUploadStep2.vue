<template>
    <div class="modal fade" id="free-upload-step-two" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header text-center border-0">
            <div class="w-100 pt-4">
              <h5 class="h3">Meta Description</h5>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                <img src="/assets/img/icons/interface/icon-x.svg" alt="Icon">
              </span>
            </button>
          </div>
          <div class="modal-body px-md-4 px-lg-5 pb-4 pb-lg-5">
            <form method="POST">

              <div class="form-group">
                <input type="text" class="form-control" v-model="title" name="title" placeholder="caption">
              </div>

              <div class="form-group">
                <input type="email" class="form-control" v-model="email" name="sign-up-email" placeholder="Email Address">
              </div>
              <div class="form-group">
                <multiselect  v-model="tags" tag-placeholder="Add this as new tag" placeholder="Search or add a tag"  :options="options" :multiple="true" :taggable="true" @tag="addTag"></multiselect>
              </div>

              <div class="form-group">
                <textarea class="form-control" v-model="description" placeholder="description"  name="description" rows="5"></textarea>
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox text-small">
                  <input v-model="agree" type="checkbox" class="custom-control-input" id="sign-up-agree">
                  <label class="custom-control-label" for="sign-up-agree">I agree to the <a target="_blank" href="utility-legal-terms.html">Terms &amp; Conditions</a>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-block" @click="next" type="submit">Proccess Compeleted</button>
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
    import Multiselect from 'vue-multiselect'
  
    export default {
        components: {Multiselect},
        data: function () {
          return {
            title: '',
            email: '',
            description: '',
            agree: false,
            tags: [],
            options: ['Vue.js','Javascript','Open Source']
          }
        },
          methods: {
            addTag (newTag) {
                      this.options.push(newTag)
                      this.tags.push(newTag)
              },
            next: function () {
                  let self = this;
                  HTTP.post('api/attachment/update', {
                      id: self.$root.baseModel,
                      title: self.title,
                      email: self.email,
                      tags: self.tags,
                      description: self.description
                    })
                    .then(function  (res){
                        self.info = res
                        $('#free-upload-step-two').modal('hide')
                        $('#free-upload-proccess').modal('show')
                    })
            }
          }

    }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css">
</style>

