<template>
<div>
    <div v-wechat-title="data.title"></div>
    <Radio></Radio>
</div>

</template>

<script>
  import Radio from '../components/radio'

  export default {
    name: "hello",
    data () {
      return {
        data: window.laravel.data
      }
    },
    methods: {
    },
    components: {
      Radio
    }
  }
</script>

<style scoped>

</style>
