<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoriesController extends Controller
{

    /**
     * @return Category[]|\Illuminate\Database\Eloquent\Collection
     * @desc get all categories for api
     */
    public function getAllCategories()
    {
        return Category::all();
    }
}
