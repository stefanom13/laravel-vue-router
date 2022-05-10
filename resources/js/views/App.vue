<template>
  <div class="app bg-orange-300 text-stone-800">
      <header>
        <nav>
          <ul>
            <li>Home</li>
            <li>Posts</li>
            <li>Category</li>
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