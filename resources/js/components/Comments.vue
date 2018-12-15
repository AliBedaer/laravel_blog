<template>
    <div>
        <div class="panel panel-default" v-for="item in comments">
            <div class="panel-heading">
                <a href="#"> {{ item.owner.name}} </a> Said
                <span class="pull-right">{{ item.created_at }}</span>
            </div>
            <div class="panel-body">
                {{ item.comment}}
            </div>
            <hr>
        </div>
    </div>
</template>
<script>
    import {mapGetters, mapActions} from 'vuex'

    export default {
        props: ['article_id'],
        methods: {
            ...mapActions({
                fetchComments: "fetchComments"
            })
        },
        computed: {
            comments() {
                return this.$store.getters.comments
            }
        },
        mounted() {
            this.fetchComments({article_id: this.article_id});
        }
    }
</script>
