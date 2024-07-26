<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $table = 'books';
    protected $fillable = [
        'title', 'author', 'publisher', 'publication_year', 'category_id', 
        'description_book', 'image', 'pdf_file', 'is_deleted', 'qrcode'
    ];

    protected $dates = ['deleted_at'];
}
