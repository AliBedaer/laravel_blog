<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticlesRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;

class ArticlesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @required Articles , breadcrumbs, sidebar_urls
     */
    public function index()
    {
        // display a view of all articles
        $articles = Article::published()->paginate(20);
        $breadcrumbs = ['Home', 'Articles'];
        $sidebar_urls = [
            "Articles" => "articles",
            "create new article" => "articles/create"
        ];
        return view('articles.index', compact('articles', 'breadcrumbs', 'sidebar_urls'));
    }

    /**
     * @return mixed
     */
    public function getAllArticles()
    {
        // return articles paginated
        return Article::published()->paginate(20);
    }

    /**
     * @return view for create new article
     */
    public function createArticle()
    {
        // display form for create new Article
        $breadcrumbs = ['Home', 'Articles', 'Create'];
        $categories = Category::pluck('title', 'id');
        return view("articles.create", compact('breadcrumbs', 'categories'));
    }


    /**
     * @param CreateArticlesRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeArticle(CreateArticlesRequest $request)
    {
        // store New Article To Database
        // Return flash session when redirect
        $article = Article::create($request->all());
        if (!$article) {
            Session::flash('error', 'Failed To Add Article ');
            return redirect()->back();
        }
        Session::flash('success', 'Article Created Successfully');
        return redirect()->back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function viewArticle($id)
    {
        // view Single article with it's comments
        $article = Article::where('id', $id)->with('comments')->first();
        if (!$article) {
            Session::flash('error', 'Article Not Found');
            return redirect()->back();
        }
        $breadcrumbs = ['Home', 'Articles'];
        return view('articles.view', compact('article', 'breadcrumbs'));

    }

    public function filterArticles(Request $request)
    {
        if ($request->categories)
            return Article::published()->whereIn('category_id',$request->categories)->paginate();

        return Article::published()->paginate();
    }
}
