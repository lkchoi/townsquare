<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class Article extends Model
{
    protected $perPage = 3;

    protected $fillable = [
        'id',
        'title',
        'author',
        'subheader',
        'abstract',
        'content',
    ];

    public function getHtmlAttribute()
    {
        return str_replace("\n", '<br />', $this->content);
    }
}
