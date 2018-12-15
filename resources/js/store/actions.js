import axios from 'axios';

// action to get comments
export const fetchComments = ({commit},{article_id}) => {
    let url = `/api/articles/${article_id}/comments`;
    axios.get(url)
        .then(response => commit('addComment',response.data))
        .catch(err => console.log(err))

};

// action to fetch articles and update pagination
export const fetchArticles = ({commit}) => {
  let url = '/api/articles';
  axios.get(url)
      .then(response => {
          commit('addArticle',response.data);
          commit('addPagination',response.data);
      })
      .catch(err => console.log(err))
};

// action to get pagination data per page per mutation
export const fetchPageData = ({commit},{page_url,mutation_name}) => {
    return axios.get(page_url)
        .then(response => {
            commit('addPagination',response.data);
            commit(mutation_name,response.data);
        })
        .catch(err => console.log(err))
};

// action to fetch categories
export const fetchCategories = ({commit}) => {
    return axios.get("/api/categories")
        .then(response => commit('getCategories',response.data))
        .catch(err => console.log(err))
};

// action fetch articles per category
export const fetchCategoryArticles = ({commit},{categories_ids}) => {
    console.log(categories_ids);
    let request = {
        params: {
            categories: categories_ids
        }
    };
    return axios.get('/api/articles/filter',request)
        .then(response => {
            commit('addArticle',response.data);
            commit('addPagination',response.data);
        })
        .catch(err => console.log(err))
};
