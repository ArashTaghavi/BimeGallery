<template>
    <card :title="`${$route.name}`">
        <add-btn to="videos"/>
        <div class="body table-responsive" v-if="posts.length>0">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>دسته بندی</th>
                    <th>توضیحات</th>
                    <th>ویدیو</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(post,key) in posts" :key=key>
                    <td>{{post.title}}</td>
                    <td>{{post.category.title}}</td>
                    <td>{{post.description}}</td>
                    <td>

                        <video :src=post.url style="width: 50%" controls></video>
                    </td>
                    <td>
                        <edit-btn :to="`/posts/images/${post.id}`"/>
                        <delete-btn :id="post.id"/>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <not-found v-else/>
    </card>
</template>

<script>
    import 'vue-persian-datetime-picker';
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            this.getPosts();
        },

        methods: {
            getPosts() {
                axios.get('/post-videos')
                    .then(response => this.posts = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleDelete(id) {
                axios.delete(`/post-videos/${id}`)
                    .then(response => this.getPosts())
                    .catch(error => this.errorNotify(error));
            }
        }

    }
</script>