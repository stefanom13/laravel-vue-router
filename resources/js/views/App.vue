<template>
  <div class="app bg-orange-300 text-stone-800">
      <header>
        <nav class=" py-6 bg-orange-800 text-white flex items-center gap-4">
          <ul class="flex items-center gap-4 w-full  justify-center">
            <li class="hover:text-sky-700">
              <!-- colleghiamo link (tramite path) -->
              <router-link to="/posts" >Posts</router-link>
            </li>
            <li class="hover:text-sky-700">
              <!-- colleghiamo link (tramite nome) (entrambi i metodi sono validi) -->
              <router-link :to="{name:'contact'}" >Contact</router-link>
            </li>
            <li class="hover:text-lime-300">Category</li>
          </ul>
        </nav>
      </header>
       <router-view></router-view>
      <!-- <PostsGrid/> -->
      <footer>
        &copy; Boolpress 2022
      </footer>
  </div>
</template>

<script>

  // import PostsGrid from './Posts.index.vue';
  // import PostsGrid from './Posts.index.vue'


  export default {
    components:{
      // PostsGrid,
    }

  }
</script>

<style lang="scss" scoped>
.app{
  min-height: 100vh;
}

</style>