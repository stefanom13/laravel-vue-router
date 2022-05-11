<template>
  <div>
      {{ $route.params.slug }}
  </div>
</template>

<script>
export default {
    mounted(){
        // console.log(this.$route)
    },
    beforeMount (){
        // axios.get(`api/posts/${this.$route.params.slug}`)
    }

}
</script>

<style>

</style>