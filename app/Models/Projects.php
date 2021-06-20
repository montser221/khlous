<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Arrow;
use App\Models\DenoatePayDetail;
use App\Models\ProjectsCategories;
class Projects extends Model
{
    use HasFactory;
    protected $primaryKey  = 'projectId';
    // protected static $model = $this;
    protected $fillable = [
      'projectId',
      'projectName',
      'projectLocation',
      'projectCategoryId',
      'projectDesc',
      'projectIcon',
      'projectImage',
      'projectText',
      'projectStatus'
    ];

    public function denoate()
    {
      return $this->hasMany( DenoatePayDetail::class,'projectTable','projectId');
    }


    public function pcategory()
    {
      return $this->belongsTo(ProjectsCategories::class,'projectCategoryId','categoryId');
    }

    public function arrow()
    {
        return $this->hasMany(Arrow::class,'projectTable','projectId');
    }

    // public static function creating()
    // {
    //     $model::create([
    //         'projectName'       => 'zakat project',
    //         'whatsapp'          => 5545421212,
    //         'projectLocation'   => 'bla bla',
    //         'projectCategoryId' => ProjectsCategories::all()->random()->categoryId,
    //         'projectDesc'       => 'some text',
    //         'projectImage'      => 'no image',
    //         'projectIcon'       => 'no image',
    //         'projectCost'       => rand(1000000,1100000000),
    //         'projectText'       => 'dfSvx8S ZLt4hrF 1wi2pDNKh 8Inv7hZD agk0dDx e6e3csa3b RItH1DGk uPvZW3d akK5OZQSaz6mFI GzL6iS M CwG3 htS5 g1yP mWOAp            ',
    //         'projectStatus'     => 0,
    //     ]);
    // }
}
