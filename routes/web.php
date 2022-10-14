<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CityrController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\categorycontroller;
use App\Http\Controllers\Admin\DefController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CuntryController;
use App\Http\Controllers\Admin\newspaperController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\Educationcontroller;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductReviewController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Route;

///
Route::controller(GoogleController::class)->group(function(){
Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::get('/',[FrontController::class,'index']);

Route::get('city/{city_slug}',[FrontController::class,'city']);

Route::get('country/{country_slug}',[FrontController::class,'country']);

Route::get('paperpk/{newsp_slug}',[FrontController::class,'newspaper']);

Route::get('{slug}',[FrontController::class,'product']);

Route::get('category/{cate_slug}',[FrontController::class,'category']);

Route::get('jobz/{id}',[FrontController::class,'defartment']);

Route::post('add_to_cart',[FrontController::class,'add_to_cart']);
Route::get('education/{edu_slug}',[FrontController::class,'education']);
Route::get('cart',[FrontController::class,'cart']);

Route::get('search/jobs',[FrontController::class,'search']);

Route::get('registration/user',[FrontController::class,'registration']);

Route::get('about',[FrontController::class,'about']);


Route::post('registration_process',[FrontController::class,'registration_process'])->name('registration.registration_process');
Route::post('login_process',[FrontController::class,'login_process'])->name('login.login_process');
Route::get('logout', function () {
session()->forget('FRONT_USER_LOGIN');
session()->forget('FRONT_USER_ID');
session()->forget('FRONT_USER_NAME');
session()->forget('USER_TEMP_ID');
return redirect('/');
});

Route::get('/verification/{id}',[FrontController::class,'email_verification']);

Route::post('product_review_process',[FrontController::class,'product_review_process']);

Route::group(['middleware'=>'user_auth'],function(){
Route::get('/order',[FrontController::class,'order']);
Route::get('/order_detail/{id}',[FrontController::class,'order_detail']);
});


Route::get('admin/navid',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

Route::group(['middleware'=>'admin_auth'],function(){
Route::get('admin/dashboard',[AdminController::class,'dashboard']);

Route::get('admin/city',[CityrController::class,'index']);

Route::get('admin/city/manage_city',[CityrController::class,'manage_city']);

Route::get('admin/city/manage_city/{id}',[CityrController::class,'manage_city']);

Route::post('admin/city/manage_city_process',[CityrController::class,'manage_city_process'])->name('city.manage_city_process');

Route::get('admin/city/delete/{id}',[CityrController::class,'delete']);

Route::get('admin/city/status/{status}/{id}',[CityrController::class,'status']);

Route::get('admin/coupon',[CouponController::class,'index']);
Route::get('admin/coupon/manage_coupon',[CouponController::class,'manage_coupon']);
Route::get('admin/coupon/manage_coupon/{id}',[CouponController::class,'manage_coupon']);
Route::post('admin/coupon/manage_coupon_process',[CouponController::class,'manage_coupon_process'])->name('coupon.manage_coupon_process');
Route::get('admin/coupon/delete/{id}',[CouponController::class,'delete']);
Route::get('admin/coupon/status/{status}/{id}',[CouponController::class,'status']);

Route::get('admin/category',[categorycontroller::class,'index']);

Route::get('admin/category/manage_category',[categorycontroller::class,'manage_category']);

Route::get('admin/category/manage_category/{id}',[categorycontroller::class,'manage_category']);

Route::post('admin/category/manage_category_process',[categorycontroller::class,'manage_category_process'])->name('category.manage_category_process');

Route::get('admin/category/delete/{id}',[categorycontroller::class,'delete']);

Route::get('admin/category/status/{status}/{id}',[categorycontroller::class,'status']);

Route::get('admin/Department',[DefController::class,'index']);
Route::get('admin/Department/manage_Department',[DefController::class,'manage_Department']);
Route::get('admin/Department/manage_Department/{id}',[DefController::class,'manage_Department']);
Route::post('admin/Department/manage_Department_process',[DefController::class,'manage_Department_process'])->name('Department.manage_Department_process');
Route::get('admin/Department/delete/{id}',[DefController::class,'delete']);
Route::get('admin/Department/status/{status}/{id}',[DefController::class,'status']);


Route::get('admin/product',[ProductController::class,'index']);
Route::get('admin/product/manage_product',[ProductController::class,'manage_product']);
Route::get('admin/product/manage_product/{id}',[ProductController::class,'manage_product']);
Route::post('admin/product/manage_producty_process',[ProductController::class,'manage_product_process'])->name('product.manage_product_process');
Route::get('admin/product/delete/{id}',[ProductController::class,'delete']);
Route::get('admin/product/status/{status}/{id}',[ProductController::class,'status']);
Route::get('admin/product/product_attr_delete/{paid}/{pid}',[ProductController::class,'product_attr_delete']);
Route::get('admin/product/product_images_delete/{paid}/{pid}',[ProductController::class,'product_images_delete']);

Route::get('admin/cuntry',[CuntryController::class,'index']);
Route::get('admin/cuntry/manage_cuntry',[CuntryController::class,'manage_cuntry']);
Route::get('admin/cuntry/manage_cuntry/{id}',[CuntryController::class,'manage_cuntry']);
Route::post('admin/cuntry/manage_cuntry_process',[CuntryController::class,'manage_cuntry_process'])->name('cuntry.manage_cuntry_process');
Route::get('admin/cuntry/delete/{id}',[CuntryController::class,'delete']);
Route::get('admin/cuntry/status/{status}/{id}',[CuntryController::class,'status']);

/*Route::get('admin/newspaper',[newspaperController::class,'index']);
Route::get('admin/tax/manage_newspaper',[newspaperController::class,'manage_tax']);
Route::get('admin/tax/manage_newspaper/{id}',[newspaperController::class,'manage_tax']);
Route::post('admin/tax/manage_tax_process',[newspaperController::class,'manage_tax_process'])->name('tax.manage_tax_process');
Route::get('admin/tax/delete/{id}',[newspaperController::class,'delete']);
Route::get('admin/tax/status/{status}/{id}',[newspaperController::class,'status']);*/

Route::get('admin/newspaper',[newspaperController::class,'index']);
Route::get('admin/newspaper/manage_newspaper',[newspaperController::class,'manage_tax']);
Route::get('admin/newspaper/manage_newspaper/{id}',[newspaperController::class,'manage_tax']);
Route::post('admin/newspaper/manage_tax_process',[newspaperController::class,'manage_tax_process'])->name('tax.manage_tax_process');
Route::get('admin/newspaper/delete/{id}',[newspaperController::class,'delete']);
Route::get('admin/newspaper/status/{status}/{id}',[newspaperController::class,'status']);

Route::get('admin/customer',[CustomerController::class,'index']);
Route::get('admin/customer/show/{id}',[CustomerController::class,'show']);
Route::get('admin/customer/status/{status}/{id}',[CustomerController::class,'status']);
Route::get('admin/customer/delete/{id}',[CustomerController::class,'delete']);


Route::get('admin/jobs_education',[Educationcontroller::class,'index']);
Route::get('admin/jobs_education/manage_education',[Educationcontroller::class,'manage_education']);
Route::get('admin/jobs_education/manage_education/{id}',[Educationcontroller::class,'manage_education']);
Route::post('admin/jobs_education/manage_education_process',[Educationcontroller::class,'manage_education_process'])->name('jobs_education.manage_education_process');
Route::get('admin/jobs_education/delete/{id}',[Educationcontroller::class,'delete']);
Route::get('admin/jobs_education/status/{status}/{id}',[Educationcontroller::class,'status']);

Route::get('admin/order',[OrderController::class,'index']);
Route::get('admin/order_detail/{id}',[OrderController::class,'order_detail']);
Route::post('admin/order_detail/{id}',[OrderController::class,'update_track_detail']);
Route::get('admin/update_payemnt_status/{status}/{id}',[OrderController::class,'update_payemnt_status']);
Route::get('admin/update_order_status/{status}/{id}',[OrderController::class,'update_order_status']);

Route::get('admin/product_review',[ProductReviewController::class,'index']);
Route::get('admin/update_product_review_status/{status}/{id}',[ProductReviewController::class,'update_product_review_status']);
Route::get('admin/product_review/delete/{id}',[ProductReviewController::class,'delete']);


Route::get('admin/navid/logout', function () {
session()->forget('ADMIN_LOGIN');
session()->forget('ADMIN_ID');
session()->flash('error','Logout sucessfully');
return redirect('admin/navid');
});



});
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
