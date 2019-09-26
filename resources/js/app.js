/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// require('./vue2-dropzone');

window.ProgressBar = function(ele){
    this.thisEle = $(ele);
    this.fileAdded = function() {
        (this.thisEle).removeAttr('hidden').find('.progress-bar').css('width','0%');
    }

    this.uploading = function(progress) {
        (this.thisEle).find('.progress-bar').attr('style', "width:"+progress+'%');
    }

    this.finish = function() {
        (this.thisEle).attr('hidden');
    }
}


window.Vue = require('vue');
window.Vue.config.silent = true
window.Vue.config.devtools = true

import VueEditorMarkdown from 'vue-editor-markdown';

Vue.use(VueEditorMarkdown);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('upload', require('./components/UploadComponent.vue').default);
Vue.component('free-upload', require('./components/FreeUpload.vue').default);
Vue.component('free-upload-step-two', require('./components/FreeUploadStep2.vue').default);
Vue.component('free-upload-proccess', require('./components/FreeUploadProccess.vue').default);
Vue.component('btn-modal', require('./components/BtnModal.vue').default);
Vue.component('file-upload', require('vue-upload-component').default);
Vue.component('player', require('./components/Player').default);
//Multiselect: window.VueMultiselect.default
// Vue.component('Multiselect', require('vue-multiselect').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
        data:{ //only place where data is not a function
        baseModel: "",
        baseUrl: 'https://vidobee.com'
    }
});
