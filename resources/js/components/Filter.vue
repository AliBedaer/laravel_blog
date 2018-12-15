<template>
    <div class="filter col-md-4">
        <v-select
            v-model="value"
            :items="items"
            item-text="title"
            item-value="id"
            label="Categories"
            multiple
            solo
            @change="filterArticles"
        ></v-select>
    </div>
</template>
<script>
    import {mapActions} from 'vuex';
    export default {
        name:"articles-filter",
        data(){
            return {
                value: []
            }
        },
        methods:{

            ...mapActions({
                fetchCategories:"fetchCategories",
                fetchCategoryArticles:"fetchCategoryArticles"
            }),

            filterArticles(){
                this.fetchCategoryArticles({categories_ids:this.value});
            }
        },
        computed:{
            items(){
                let items_names = [];
                let categories = this.$store.getters.categories;
                for (let key in categories){
                    items_names.push({title:categories[key].title, id:categories[key].id});
                }
                return items_names;
            }
        },
        mounted(){
            this.fetchCategories();
        }
    }
</script>

<style>
    .filter{
        display: inline;
        float:right;
    }
</style>
