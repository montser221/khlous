<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Sequence;


class UsersCategories extends Model
{
    use HasFactory;
    protected $primaryKey  = 'userCategoryId';
    protected $fillable = [
      'userCategoryId',
      'userCategoryName',
    ];
}
