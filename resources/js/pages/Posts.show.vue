<template>
  <div class="p-6 flex items-center justify-center">
      <div class="w-88 rounded-xl border border-black py-3  ">
        {{ $route.params.slug }}
        <img src="https://picsum.photos/450/250" class="w-full object-cover" alt="">
        <h1>{{post.title}}</h1>
        <p>{{post.content}}</p>
      </div>
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