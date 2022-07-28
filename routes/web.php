<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Faculty;
use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $faculties = Faculty::paginate(3);
    return view('frontend.pages.index',compact('faculties'));
});


         //yo profile url ma
Route::get('profile', function(){
    $students = Student::all();
                        //yo pages dhekhaune
    return view('frontend.pages.profile',compact('students'));
});

Route::get('/galleryprofile',function(){
    //Galery
    $gallery = Gallery::all();
    return view('frontend.pages.photos',compact('gallery'));

    //Gallery images
});

Route::get('gallerycontent/{id}',function($id){
    $photos = Gallery::where('gallery_id',$id)->get();
    return view('frontend.pages.gallery',compact('photos'));
});

Route::delete('/gallery/{$id}',function($id){
    $photo = GalleryImage::find($id);
    $photo->delete();
    return redirect()->back();
});

Route::view('loginme','frontend.login.app');


//mathi ko comment ko thau ma yo tala ko lekhda ni hunxna. yo tala ko lekhda xai studentcontroller
//impot pani gareko xa



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'admin'],function(){
    Route::resource('students',StudentController::class);
    Route::resource('teachers',TeacherController::class);
    Route::resource('books',BookController::class);
    Route::resource('faculty',FacultyController::class);
    Route::resource('gallery',GalleryController::class);
});