<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Projects;
class ProjectsCategories extends Model
{
    use HasFactory;
    protected $primaryKey  = 'categoryId';
    protected $fillable = [
      'categoryId',
      'categoryName',
    ];


    public function projects()
    {
    	return $this->hasMany('App\Models\Projects','projectCategoryId','projectId');
    }
}
