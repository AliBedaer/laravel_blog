<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $table = "articles";
    protected $fillable = ['title','description','is_published','category_id'];

    /**
     * Scope a query to only include published articles and ordered by created at desc.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->where('is_published',1)->orderBy('created_at','DESC');
    }

    /**
     * Return path for each article
     *
     * @return string
     * @description get current record url
     */
    public function path(){
        return "articles/".$this->id;
    }

    /**
     * Get comments related to article
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
