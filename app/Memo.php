<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    // カラムに代入を拒否しない
    protected $guarded = [];

    /**
     * タグでフィルタリング
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string|null $tag
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTagFilter($query, ?string $tag)
    {
        if (!is_null($tag)) {
            return $query->where('tag', $tag);
        }
        return $query;
    }

    /**
     * タイトルで検索する
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string|null $word
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearchTitle($query, ?string $word)
    {
        if (!is_null($word)) {
            return $query->where('title', 'like', '%' . $word . '%');
        }
        return $query;
    }
}
