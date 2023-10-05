<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DeliveryZoneController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::resource('/roles',RoleController::class)->middleware('permission:role_manage');
Route::resource('/permissions',PermissionController::class)->middleware('permission:permission_manage');

//Admin
Route::get('/admins/trashed',[AdminController::class,'trashed_list'])->middleware('permission:admin_manage')->name('admins.trashed');
Route::get('/admins/trashed/{admin}/restore',[AdminController::class,'restore'])->middleware('permission:admin_manage')->name('admins.restore');
Route::get('/admins/trashed/{admin}/delete',[AdminController::class,'force_delete'])->middleware('permission:admin_manage')->name('admins.force_delete');
Route::resource('/admins',AdminController::class)->middleware('permission:admin_manage');


//Slider
Route::get('/sliders/trashed',[SliderController::class,'trashed_list'])->middleware('permission:slider_manage')->name('sliders.trashed');
Route::get('/sliders/trashed/{slider}/restore',[SliderController::class,'restore'])->middleware('permission:slider_manage')->name('sliders.restore');
Route::get('/sliders/trashed/{slider}/delete',[SliderController::class,'force_delete'])->middleware('permission:slider_manage')->name('sliders.force_delete');
Route::resource('/sliders',SliderController::class)->middleware('permission:slider_manage');

//Menu
Route::get('/menus/trashed',[MenuController::class,'trashed_list'])->middleware('permission:menu_manage')->name('menus.trashed');
Route::get('/menus/trashed/{menu}/restore',[MenuController::class,'restore'])->middleware('permission:menu_manage')->name('menus.restore');
Route::get('/menus/trashed/{menu}/delete',[MenuController::class,'force_delete'])->middleware('permission:menu_manage')->name('menus.force_delete');
Route::resource('/menus',MenuController::class)->middleware('permission:menu_manage');




//Site Setting
Route::get('site-setting',[\App\Http\Controllers\Admin\GlobalSettingController::class,'site_setting']);
Route::get('code-setting',[\App\Http\Controllers\Admin\GlobalSettingController::class,'code_setting']);
Route::get('page-setting',[\App\Http\Controllers\Admin\GlobalSettingController::class,'page_setting']);
Route::post('site-setting',[\App\Http\Controllers\Admin\GlobalSettingController::class,'site_setting_update'])->name('site-setting');
Route::post('code-setting',[\App\Http\Controllers\Admin\GlobalSettingController::class,'code_setting_update'])->name('code-setting');
Route::post('page-setting',[\App\Http\Controllers\Admin\GlobalSettingController::class,'page_setting_update'])->name('page-setting');
