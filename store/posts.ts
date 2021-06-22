import Config from "~/assets/config"

/*
this is where we will eventually hold the data for all of our posts
*/
export const state = () => ({
    posts: []
})

/*
this is where all your getters should be defined
*/
export const getters = {
    posts(state) {
        return state.posts;
    }
}

/*
this will update the state with the posts
*/
export const mutations = {
    updatePosts: (state, posts) => {
        state.posts = posts
    }
}

/*
actions is where we will make an API call that gathers the posts,
and then commits the mutation to update it
*/
export const actions = {
    async getPosts({ state, commit }) {
        if (state.posts.length) return
        try {
            let posts = await fetch(`${Config.api}/wp/v2/posts/?`
            ).then(res => res.json())
            posts = posts
                .filter(el => el.status === "publish")
                .map(({ id, slug, title, excerpt, date, tags, content }) => ({
                    id,
                    slug,
                    title,
                    excerpt,
                    date,
                    tags,
                    content
                }))
            commit("updatePosts", posts)
        } catch (err) {
            console.log(err)
        }
    }
}