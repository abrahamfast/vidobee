<template>
    <button type="button" v-bind:class="classname" data-toggle="modal" v-bind:data-target="target">Upload Video</button>
</template>

<script>
    export default {
        props: ['target', 'classname'],
    }
</script>
