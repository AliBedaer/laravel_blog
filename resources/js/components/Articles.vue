<template>
    <div>
        <div class="card" style="margin-bottom: 10px;" v-for="article in articles">
            <div class="card-header">
                <a :href="'/articles/'+article.id">{{ article.title }}</a>
            </div>
            <div class="card-body">
                {{  article.description }}
            </div>
        </div>
        <pagination
            :path="pagination_details.path"
            :first_page="pagination_details.first_page_url"
            :current_page="pagination_details.current_page"
            :from="pagination_details.from"
            :last_page="pagination_details.last_page"
            :last_page_url="pagination_details.last_page_url"
            :next_page_url="pagination_details.next_page_url"
            :per_page="pagination_details.per_page"
            :prev_page_url="pagination_details.prev_page_url"
            :to="pagination_details.to"
            :total="pagination_details.total"
            mutation_name="addArticle"
        ></pagination>
    </div>
</template>

<script>
    import Pagination from './Pagination'
    import {mapActions} from 'vuex';
    export default {
        components:{
            Pagination
        },
        name:"articles",
        methods:{
            ...mapActions({
                fetchArticles:"fetchArticles"
            })
        },
        computed:{
            articles(){
                return this.$store.getters.articles;
            },
            pagination_details(){
                return this.$store.getters.pagination_details;
            }
        },
        mounted(){
            this.fetchArticles()
        }
    }
</script>
