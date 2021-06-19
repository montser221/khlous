<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Eloquent\Factories\Sequence;

Route::get('/',[App\Http\Controllers\MainController::class,'index'])->name('/');
Route::get('viewFile',[App\Http\Controllers\ViewFileController::class,'viewFile'])->name('viewFile');

// associcFiles
Route::get('allreports',[App\Http\Controllers\publicReportController::class,'allreports'])->name('allreports');
Route::get('associcFiles',[App\Http\Controllers\PoliciesController::class,'associcFiles'])->name('associcFiles');
Route::get('viewImage/{img}',[App\Http\Controllers\ImageManagementController::class,'viewImage'])->name('viewImage');
Route::get('gallery',[App\Http\Controllers\ImageManagementController::class,'gallery'])->name('gallery');

Route::get('money', [App\Http\Controllers\MoneyReportController::class,'index'])->name('money.index')->middleware('auth');
Route::get('dDetail/{id?}', [App\Http\Controllers\MoneyReportController::class,'dDetail'])->name('dDetail')->middleware('auth');
// public page
Route::get('login',[App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::get('logout',[App\Http\Controllers\LoginController::class,'logout'])->name('logout');
Route::get('needy',[App\Http\Controllers\DulniController::class,'needy'])->name('needy');
Route::post('checklogin',[App\Http\Controllers\LoginController::class,'checklogin'])->name('checklogin');
Route::get('/get_project_data',[App\Http\Controllers\ProjectsController::class,'get_project_data'])->name('get_project_data');
Route::get('cart',[App\Http\Controllers\MainController::class,'cart'])->name('cart');
Route::get('ourproject',[App\Http\Controllers\MainController::class,'ourproject'])->name('ourproject');
Route::get('urgentproject',[App\Http\Controllers\MainController::class,'urgentproject'])->name('urgentproject');
Route::get('paymethod',[App\Http\Controllers\paymethodController::class,'paymethod'])->name('paymethod');
Route::get('zakat',[App\Http\Controllers\MainController::class,'zakat'])->name('zakat');
Route::get('aboutus',[App\Http\Controllers\aboutController::class,'aboutus'])->name('aboutus');
Route::get('volnt',[App\Http\Controllers\VolntController::class,'volnt'])->name('volnt')->middleware('auth');
Route::delete('volnt/{id}',[App\Http\Controllers\VolntController::class,'destroy'])->name('volnt.destroy')->middleware('auth');
Route::get('applicable',[App\Http\Controllers\ApplicableController::class,'applicable'])->name('applicable')->middleware('auth');
Route::delete('destroy/{id}',[App\Http\Controllers\ApplicableController::class,'destroy'])->name('destroy')->middleware('auth');
// cart routes
Route::post('addToCart/{id}',[App\Http\Controllers\CartController::class,'addToCart'])->name('addToCart');
Route::post('addToCartNow/{id}',[App\Http\Controllers\CartController::class,'addToCartNow'])->name('addToCartNow');

Route::post('sdad',[App\Http\Controllers\CartController::class,'sdad'])->name('sdad');
Route::post('card',[App\Http\Controllers\CartController::class,'card'])->name('card');
Route::delete('destory/{id}',[App\Http\Controllers\CartController::class,'destory'])->name('cart.destory');
Route::get('projectDetail/{id?}',[App\Http\Controllers\ProjectsController::class,'projectDetail'])->name('projectDetail');
Route::get('customProjectDetail',[App\Http\Controllers\ProjectsController::class,'customProjectDetail'])->name('customProjectDetail');
Route::get('/projectReport/{projectId}',[App\Http\Controllers\ProjectsController::class,'projectReport'])->name('projectReport');
// Route::post('store2',[App\Http\Controllers\ContactController::class,'store2'])->name('contact.store2');
Route::get('contact2',[App\Http\Controllers\ContactController::class,'contact'])->name('contact.contact')->middleware('auth');
Route::get('msgDetail/{contact}',[App\Http\Controllers\ContactController::class,'msgDetail'])->name('contact.msgDetail')->middleware('auth');
 //all videos and all files
Route::get('allVideos',[App\Http\Controllers\videosController::class,'allVideos'])->name('allVideos');
Route::get('allFiles',[App\Http\Controllers\pdfFileController::class,'allFiles'])->name('allFiles');
Route::get('allReportFiles',[App\Http\Controllers\ManageMoneyReportController::class,'allReportFiles'])->name('allReportFiles');
// Dashboard Area
Route::get('stat',[App\Http\Controllers\StatisticsController::class,'statistics'])->name('stat')->middleware('auth');
Route::get('payments',[App\Http\Controllers\DenoateController::class,'payments'])->name('payments');

Route::get('/exportAllDenoate', [App\Http\Controllers\DenoateController::class,'exportAllDenoate'])->name('exportAllDenoate')->middleware('auth');
Route::get('/exportToExcel/{id}', [App\Http\Controllers\MoneyReportController::class,'exportToExcel'])->name('exportToExcel')->middleware('auth');
Route::get('exportNeedy',function(){
    return Excel::download(new App\Exports\Needy(), 'needy_'.date('Y-M-D').'.xlsx');
});
Route::get('exportApplicable',function(){
    return Excel::download(new App\Exports\Applicable(), 'Applicable_'.date('Y-M-D').'.xlsx');
});
Route::get('exportVolntry',function(){
    return Excel::download(new App\Exports\Volntry(), 'Volntry_'.date('Y-M-D').'.xlsx');
});
Route::resource([
    'dulni',App\Http\Controllers\DulniController::class,
    'voluntary',App\Http\Controllers\VoluntaryControlle::class,
    'benfit',App\Http\Controllers\BenfitController::class,
    'jobs',App\Http\Controllers\JobController::class,
    'contact',App\Http\Controllers\ContactController::class,
    'reports',App\Http\Controllers\publicReportController::class,
    'arrows',App\Http\Controllers\ArrowsController::class,
    'statistics',App\Http\Controllers\StatisticsController::class,
    'denoate',App\Http\Controllers\DenoateController::class,
    'dashboard',App\Http\Controllers\Dashboard\DashboardController::class,
    'userscategories',App\Http\Controllers\UsersCategoriesController::class,
    'users',App\Http\Controllers\UsersController::class,
    'paymentmethod',App\Http\Controllers\PaymentMethodController::class,
    'aboutassoiation',App\Http\Controllers\AboutAssociationController::class,
    'services',App\Http\Controllers\ServicesController::class,
    'projectcategories',App\Http\Controllers\ProjectsCategoriesController::class,
    'projects',App\Http\Controllers\ProjectsController::class,
    'urgentprojects',App\Http\Controllers\UrgentProjectsController::class,
    'settings',App\Http\Controllers\SettingsController::class,
    'attendace',App\Http\Controllers\AttendaceController::class,
    'members',App\Http\Controllers\MembersController::class,
    'agents',App\Http\Controllers\AgentsController::class,
    'videos',App\Http\Controllers\videosController::class,
    'payees',App\Http\Controllers\PayeeManagementController::class,
    'policies',App\Http\Controllers\PoliciesController::class,
    'images',App\Http\Controllers\ImageManagementController::class,
    'files',App\Http\Controllers\pdfFileController::class,
    'goals',App\Http\Controllers\OurGoalController::class,
    'reportfiles',App\Http\Controllers\ManageMoneyReportController::class,
    'otherfiles',App\Http\Controllers\OtherMemberController::class,

]) ;
