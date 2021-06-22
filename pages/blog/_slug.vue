<template>
    <main class="post individual" v-if="post">
        <h1>{{ post.title.rendered }}</h1>
        <section v-html="post.content.rendered"></section>
        <!-- <section v-html="post.content.rendered"></section> -->
    </main>
    <main v-else>
        <!-- Display some loading -->
    </main>
</template>

<script lang="ts">
import Vue from "vue";
import { mapGetters } from "vuex"

export default Vue.extend({
    async asyncData({ params }) {
      const slug = params.slug
      return { slug }
    },
    data() {
        return {
            slug: ''
        }
    },
    computed: {
        ...mapGetters({
            posts: 'posts/posts'
        }),
        post() {
            //@ts-ignore = this.slug is not defined
            return this.posts.find(el => el.slug === this.slug);
        }
    },
    created() {
        this.$store.dispatch("posts/getPosts")
    }
});
</script>