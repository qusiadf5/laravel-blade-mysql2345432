<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // قم بتعريف خصائص الموديل، مثل الحقول المسموح بها
    protected $fillable = ['title', 'category', 'author', 'section', 'language', 'pages', 'file_size', 'file_type', 'publication_date', 'description', 'cover_image'];
}
