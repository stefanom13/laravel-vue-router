<template>
  <div class="card post rounded-lg border border-black overflow-hidden">
      <img src="https://picsum.photos/450/250" class="w-full object-cover" alt="">
      <div class="card_body p-6">
          <h4 class="post_title mb-4 text-xl">{{post.title}}</h4>
          <p class="text-fuchsia-900 text-l mb-2 " v-if="post.category">{{post.category.name}}</p>
          <ul class="tags flex flex-wrap gap-4 items-center">
              <li class="tag px-4 text-xs text-white bg-lime-600 rounded-full" v-for="tag in post.tags" :key="tag.id"> {{tag.name}} </li>
          </ul>
          <div class="py-2">
            <router-link tag="button" class="p-1 bg-fuchsia-900 text-white rounded-md bc" 
                :to="{name:'posts.show', params: { slug: post.slug  } }" >Leggi articolo
            </router-link> 
          </div>
      </div>
  </div>
</template>

<script>
export default {
    props:{
        post:{
            type: Object,
            required: false
        }
    }
}
</script>

<style lang="scss" scoped>

</style>