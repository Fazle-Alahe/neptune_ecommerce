<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_category');
    }
}
