// mutation for adding comment
export const addComment = (state,comments) => {
    state.comments = [];
    state.comments.push(...comments)
};

// mutation for adding article and getting all ot it
export const addArticle = (state,articles) => {
    state.articles = [];
    state.articles.push(...articles.data)
};

// mutation for pagination
export const addPagination = (state,pagination_details) => {
    state.pagination_details = {};
    state.pagination_details = {...pagination_details};
};

// mutation for getting categories
export const getCategories = (state,categories) => {
    state.categories = [];
    state.categories.push(...categories);
};

