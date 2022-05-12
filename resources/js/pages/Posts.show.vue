<template>
  <div>
      {{ $route.params.slug }}
      <div class="w-300 h-200">
        <!-- <img src="https://picsum.photos/450/250" class="w-full object-cover" alt=""> -->
      </div>
      <h1>{{post.title}}</h1>
      <p>{{post.content}}</p>
  </div>
</template>

<script>
export default {
    data(){
        return{ 
            post: []
        }
    },
    mounted(){
        console.log(this.$route)
    },
    beforeMount(){
        axios.get (`/api/posts/${ this.$route.params.slug }`)
        .then(res =>{
            const { post } = res.data
            this.post = post
        })
        .catch(err =>{
            console.warn(err)
        })
    },

}
</script>

<style>

</style>