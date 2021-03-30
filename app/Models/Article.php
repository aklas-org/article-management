<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $searchColumns = [
        'title',
        'writer',
    ];

    public function scopeSearch($query, $search)
    {
        return $query->when($search, function ($query, $search) {
            foreach ($this->searchColumns as $searchColumn) {
                $query->orWhere($searchColumn, 'like', '%' . $search . '%');
            }

            return $query;
        });
    }
}
