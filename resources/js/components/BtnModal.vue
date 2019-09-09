<template>
    <button type="button" class="btn btn-primary ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3" data-toggle="modal" v-bind:data-target="target">Purchase Now</button>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['target']
    }
</script>
