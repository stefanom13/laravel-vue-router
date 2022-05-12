<template>
    <div v-if="!loading" class="p-6 flex items-center justify-center">
        <div class="w-9/12 rounded-xl  border border-black px-2 py-3">
        <p class="text-center">{{ $route.params.slug }}</p>
            <div class=" flex items-center justify-center ">
                <figure class="w-96">
                    <img src="https://picsum.photos/450/250" class="w-full object-cover" alt="">
                </figure>
            </div>
            <h1>{{ post.title }}</h1>
            <p>{{ post.content }}</p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            post: [],
            loading:true
        };
    },
    methods: {
        fetchPost() {
            axios.get(`/api/posts/${this.$route.params.slug}`)
            .then((res) => {
                const { post } = res.data;
                this.post = post;
                this.loading=false;
            })
            .catch((err) => {
                console.warn(err);
            });
        },
    },
    beforeMount() {
        this.fetchPost()
        // axios.get (`/api/posts/${ this.$route.params.slug }`)
        // .then(res =>{
        //     const { post } = res.data
        //     this.post = post
        // })
        // .catch(err =>{
        //     console.warn(err)
        // })
    },
};
</script>

<style></style>
