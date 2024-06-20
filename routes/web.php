<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\MenuBarController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SubAdminController;
use App\Http\Controllers\Front\HomePageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OurExpertsController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\OurServicesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomePageController::class, 'home']);
Route::get('/about', [HomePageController::class, 'about_us_page']);
Route::get('/services', [HomePageController::class, 'services_page']);
Route::get('service-detail/{name}', [HomePageController::class, 'service_detail']);
Route::get('/project', [HomePageController::class, 'project']);
Route::get('project-detail/{id}', [HomePageController::class, 'project_detail']);
Route::get('/team', [HomePageController::class, 'our_team']);
Route::get('/team-detail/{id}', [HomePageController::class, 'team_detail']);
Route::get('/our_courses', [HomePageController::class, 'our_Courses']);
Route::get('/course-detail/{id}', [HomePageController::class, 'course_detail']);
Route::get('/different-courses/{name}', [HomePageController::class, 'course_detail_different_page']);
Route::get('/contact', [HomePageController::class, 'contact_page']);


Route::group(['middleware' => 'admin'], function(){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('subadmin/dashboard',[AuthController::class, 'subadmin']);

    //admin
    Route::get('admin/admin/list', [AdminController::class, 'list']);
    Route::get('admin/admin/add', [AdminController::class, 'add']);
    Route::post('admin/admin/add', [AdminController::class, 'insert']);

    Route::get('admin/admin/edit/{id}', [AdminController::class,'edit']);
    Route::post('admin/admin/edit/{id}', [AdminController::class,'update']);
    Route::get('admin/admin/delete/{id}', [AdminController::class,'delete']);

    //subadmin
    Route::get('admin/subadmin/list', [SubAdminController::class, 'list']);
    Route::get('admin/subadmin/add', [SubAdminController::class, 'add']);
    Route::post('admin/subadmin/add', [SubAdminController::class, 'insert']);

    Route::get('admin/subadmin/edit/{id}', [SubAdminController::class,'edit']);
    Route::post('admin/subadmin/edit/{id}', [SubAdminController::class,'update']);
    Route::get('admin/subadmin/delete/{id}', [SubAdminController::class,'delete']);

     //menu bar
     Route::get('admin/menu/list', [MenuBarController::class, 'list']);
     Route::get('admin/menu/add', [MenuBarController::class, 'add']);
     Route::post('admin/menu/add', [MenuBarController::class, 'insert']);
     Route::get('admin/menu/edit/{id}', [MenuBarController::class,'edit']);
     Route::post('admin/menu/edit/{id}', [MenuBarController::class,'update']);
     Route::get('admin/menu/delete/{id}', [MenuBarController::class,'delete']);

     //slider
     Route::get('admin/slider/list', [SliderController::class, 'list']);
     Route::get('admin/slider/add', [SliderController::class, 'add']);
     Route::post('admin/slider/add', [SliderController::class, 'insert']);
     Route::get('admin/slider/edit/{id}', [SliderController::class,'edit']);
     Route::post('admin/slider/edit/{id}', [SliderController::class,'update']);
     Route::get('admin/slider/delete/{id}', [SliderController::class,'delete']);

    //experts
    Route::get('admin/expert/list', [OurExpertsController::class, 'list']);
    Route::get('admin/expert/add', [OurExpertsController::class, 'add']);
    Route::post('admin/expert/add', [OurExpertsController::class, 'insert']);

    Route::get('admin/expert/edit/{id}', [OurExpertsController::class,'edit']);
    Route::post('admin/expert/edit/{id}', [OurExpertsController::class,'update']);
    Route::get('admin/expert/delete/{id}', [OurExpertsController::class,'delete']);

    //services
    Route::get('admin/service/list', [OurServicesController::class, 'list']);
    Route::get('admin/service/add', [OurServicesController::class, 'add']);
    Route::post('admin/service/add', [OurServicesController::class, 'insert']);

    Route::get('admin/service/edit/{id}', [OurServicesController::class,'edit']);
    Route::post('admin/service/edit/{id}', [OurServicesController::class,'update']);
    Route::get('admin/service/delete/{id}', [OurServicesController::class,'delete']);

    //projects
    Route::get('admin/project/list', [ProjectController::class, 'list']);
    Route::get('admin/project/add', [ProjectController::class, 'add']);
    Route::post('admin/project/add', [ProjectController::class, 'insert']);

    Route::get('admin/project/edit/{id}', [ProjectController::class,'edit']);
    Route::post('admin/project/edit/{id}', [ProjectController::class,'update']);
    Route::get('admin/project/delete/{id}', [ProjectController::class,'delete']);

    //team members
    Route::get('admin/team/list', [TeamMemberController::class, 'list']);
    Route::get('admin/team/add', [TeamMemberController::class, 'add']);
    Route::post('admin/team/add', [TeamMemberController::class, 'insert']);

    Route::get('admin/team/edit/{id}', [TeamMemberController::class,'edit']);
    Route::post('admin/team/edit/{id}', [TeamMemberController::class,'update']);
    Route::get('admin/team/delete/{id}', [TeamMemberController::class,'delete']);

    //course
    Route::get('admin/course/list', [CourseController::class, 'list']);
    Route::get('admin/course/add', [CourseController::class, 'add']);
    Route::post('admin/course/add', [CourseController::class, 'insert']);

    Route::get('admin/course/edit/{id}', [CourseController::class,'edit']);
    Route::post('admin/course/edit/{id}', [CourseController::class,'update']);
    Route::get('admin/course/delete/{id}', [CourseController::class,'delete']);
});

// authentication
Route::post('auth_register', [AuthController::class, 'auth_register']);
Route::post('auth_login', [AuthController::class, 'auth_login']);

Route::get('forgot-password', [AuthController::class, 'forgot_password']);
Route::post('forgot-password', [AuthController::class, 'auth_forgot_password']);
Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'auth_reset']);
Route::get('admin/logout',[AuthController::class, 'logout_admin']);
