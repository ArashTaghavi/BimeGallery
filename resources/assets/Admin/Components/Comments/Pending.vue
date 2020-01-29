<template>
    <card :title="`${$route.name}`">
        <div class="body table-responsive" v-if="comments.length>0">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>متن کامنت</th>
                    <th>تاریخ</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(comment,key) in comments" :key=key>
                    <td>{{comment.full_name}}</td>
                    <td>{{comment.email}}</td>
                    <td>{{comment.description}}</td>
                    <td>{{jDate(comment.created_at)}}</td>
                    <td>
                        <icon-btn type="success" icon="check" @click="handlePending(comment.id)"> تایید</icon-btn>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <not-found v-else/>
    </card>
</template>


<script>
    export default {
        data() {
            return {
                comments: []
            }
        },
        created() {
            this.getComments();
        },
        methods: {
            getComments() {
                axios.get('/comments/pending')
                    .then(response => this.comments = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleDelete(id) {
                axios.delete(`/comments/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getCategories();
                    })
                    .catch(error => this.errorNotify(error));
            },
            handlePending(id) {
                axios.put(`/comments/${id}`)
                    .then(response => this.getComments())
                    .catch(error => this.errorNotify(error));
            },
            jDate(date) {
                return moment(date).format('jYYYY/jM/jD HH:mm:ss');
            },
        }
    }
</script>