<template>
    <div class="posts">
        <main>
            <h2>Posts</h2>
            <div class="post" v-for="post in posts" :key="post.id">
                <h3><a :href="`blog/${post.slug}`">{{ post.title.rendered }}</a></h3>
                <div v-html="post.excerpt.rendered"></div>
                <a :href="`blog/${post.slug}`" class="readmore">Read more</a>
            </div>
        </main>
    </div>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
    computed: {
        posts() {
            return this.$store.state.posts.posts;
        }
    },
    created() {
        this.$store.dispatch("posts/getPosts")
    }
});
</script>

<style scoped>

</style>