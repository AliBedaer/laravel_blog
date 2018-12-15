<template>
    <div>
        <div class="form-group row">
            <div class="col-md-4">
            <textarea name="Comment" id="comment" class="form-control" v-model="comment" rows="3" placeholder="Leave A comment"></textarea>
                <br>
            <button class="btn btn-primary" @click.prevent="submitComment">Submit</button>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                comment: ""
            }
        },
        props:['article_id','user_id'],
        methods:{
            submitComment(){
                this.$http.post('/api/comments/create/',
                    {"comment":this.comment,"article_id":this.article_id,"user_id":this.user_id})
                .then(response => {
                    this.comment = " ";
                    this.$store.dispatch('fetchComments',{"article_id":this.article_id})
                }).catch(err => console.log(err))
            }
        }
    }
</script>
