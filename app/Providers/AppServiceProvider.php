<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use App\Models\Projects;
use App\Models\Settings;
use App\Models\pdfFile;
use App\Models\DenoatePayDetail;
use App\Models\AboutAssociation;
use App\Models\PaymentMethod;
use App\Models\Policies;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        //  $this->app->bind('path.public', function() {
        //     return base_path('../public_html');
        //  });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
        view()->share('allprojects',Projects::with('arrow','denoate','pcategory')->latest()->where('projectStatus',1)->paginate(9));
        view()->share('urgentprojects',Projects::with('arrow','denoate','pcategory')->latest()->where('projectStatus',1)->whereNotIn('projectCategoryId',[1])->paginate());
        view()->share('settingsdata',Settings::find(1));
        view()->share('paymethods',PaymentMethod::latest()->take(4)->get());
        view()->share('allDenoate',DenoatePayDetail::with('pmethods','projects')->latest()->paginate(9));
        view()->share('aboutassociation',AboutAssociation::find(1));
        view()->share('pdffiles',pdfFile::latest()->take(10)->where('fileStatus',1)->get());
        view()->share('allpolicies',Policies::latest()->paginate(8));
    }
}
