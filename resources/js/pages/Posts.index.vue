<template>
    <div>
        <div class="container">
            <header class="py-3">
                <h1>Ultimi Post</h1>
            </header>
        </div>
        <div class="container grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8">
            <PostCard v-for="post in posts" :key="post.id" :post="post" />
            <!-- <div v-for="post in posts" :key="post.id">
                {{ post.title }}
            </div> -->
        </div>
        <div class="container py-4 ">
            <!-- paginazione -->
            <ul class="paginate flex justify-center items-center gap-7">
                 <li @click="fetchPosts(n)" :class="[ currentPage === n ? 'bg-lime-700' : ' bg-rose-800', 'dot rounded-full cursor-pointer text-white h-10 w-10 flex justify-center items-center']" v-for="n in lastPage" :key="n" >{{ n }}</li>
            </ul>
            <!-- <p>last page:{{ lastPage }}</p>
            <p>current page:{{ currentPage }}</p> -->

        </div>
    </div>
</template>

<script>

import PostCard from '../components/PostCard.vue'
export default {
    components: {
        PostCard
    },
    data() {
        return {
            posts: [],
            lastPage:0,
            currentPage:1,
        };
    },
    // creiamo metodo fetchpost (userà axios per fare la chiamata)
    methods: {
        fetchPosts( page = 1) {
            axios.get('/api/posts',{
                params:{
                    page
                    // page: page
                }
            })
            .then( res =>{
                // console.log(res.data.posts);

                // destrutturazione
                const {posts} = res.data
                const { data,last_page,current_page } = posts
                this.posts = data
                this.lastPage = last_page
                this.currentPage = current_page
            })
            .catch( err => {
                console.warn(err);
            })
        },
    },
    mounted() {
        this.fetchPosts();
    },
    // quando il componente verrà montato invocherà questa funzione
    // Axios recupererà i dati e li salverà in ($posts=[])
};
</script>

<style></style>
