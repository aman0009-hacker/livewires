<?php

use App\Http\Controllers\javapss;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mmm;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\form;
use App\Http\Controllers\fetchData;
use App\Http\Controllers\getApiSData;
use App\Http\Controllers\filesUp;
use App\Http\Controllers\dataInDatabase;
use App\Http\Controllers\datFet;
use App\Http\Controllers\query;
use App\Http\Controllers\join;
use App\Http\Controllers\relatino;
use App\Http\Controllers\bind;
use Illuminate\Support\Str;
use App\Models\rule;


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
// Route::view('out','outside');

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',function()
{
    // if (view()->exists('home')) {
    //     $data = [
    //         'name' => "aman",
    //         'email' => "aman@gmail.com"
    //     ];
    //     return view('home',$data);
    // } 
    
    // else

    //     echo "Sorry the server is busy";
    if(session()->has('user'))
    {
         $data = [
            'name' => "aman",
            'email' => "aman@gmail.com"
        ];
    return view('home',$data);
    
    }
    else

    return redirect('form');
});






Route::view('form','fromSubmit');

Route::post('submit', [form::class, 'form']);

Route::group(['middleware'=>['arr']],function()
{
    Route::get('arr', [javapss::class, 'arr']);
    Route::get('first',[mmm::class, 'con']);
});

Route::get('fdata', [fetchData::class, 'fetch_data']);


Route::get('api',[getApiSData::class,'api_data']);

Route::get('/logout',function()
{
    if(session()->has('user'))
    {
        session()->pull('user',null);
    }
    return redirect('form');
});


Route::view('file','upload_file');
Route::post('files',[filesUp::class,'upload']);


Route::view('base','stInData');
Route::post('databa',[dataInDatabase::class,'storeid']);

Route::get('fila',[datFet::class, 'saver']);
Route::get('del/{id}',[datFet::class, 'del']);
Route::get('edit/{edit}', [datFet::class, 'edit']);
Route::post('update', [datFet::class, 'update']);
// Route::get('edit/{id}',[datFet::class, 'edit']);
Route::get('que',[query::class,'the_query']);


Route::get('joi',[join::class,'joining']);
Route::get('rel',[relatino::class,'main']);


Route::get('str',function()
{
    $str="i am a bad boy";
  return str::of($str)->ucfirst($str)->replaceFirst("I","we",$str)->camel($str);
    
});
Route::get('bi/{id}',[bind::class,'the_Data']);

Route::get('mani/{re}',function($lef)
{
 
    $data=rule::findorfail($lef);
   
    return view('routeBind',compact('data'));

    
});