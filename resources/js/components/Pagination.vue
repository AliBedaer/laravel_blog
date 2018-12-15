<template>
    <div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item" :class="{  'disabled' : !prev_page_url }" >
                    <a class="page-link" @click="paginate(prev_page_url)" tabindex="-1">Previous</a>
                </li>

                <li class="page-item" v-for="i in last_page" :key="i"
                    v-bind:class="{ active: i === current_page }">
                                    <span class="page-link"
                                          @click='paginate(path+"?page="+i)'>{{i}}</span>
                </li>

                <!--<li class="page-item"><a class="page-link" href="#">3</a></li>-->

                <li class="page-item" :class="{'disabled' : !next_page_url}">
                    <a class="page-link" @click="paginate(next_page_url)" >Next</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    import { mapActions } from 'vuex';
     export default {
        name:"pagination",
        props:["first_page","from","last_page","last_page_url","next_page_url","path","per_page","prev_page_url","to","total","current_page","mutation_name"],
         methods:{
            ...mapActions({
                fetchPageData:"fetchPageData"
            }),
             paginate(url){
                this.fetchPageData({page_url:url,mutation_name:this.mutation_name});
             }
         }

    }
</script>
