<?php


use App\User;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------

| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//api
Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function () {
  Route::get('/university', 'UniversityController@getAll');
  Route::get('/university/{code}', 'UniversityController@getByCode');
  Route::get('/courses', 'CoursesController@getAll');
  Route::get('/courses/{code}', 'CoursesController@getByUniversity');
  Route::get('/subject/{code}', 'SubjectController@showAllSubject');
  Route::get('/subject/{code}/year/{year}', 'SubjectController@showAllSubjectByyear');
  Route::get('/subject/{code}/semester/{semester}', 'SubjectController@showAllSubjectBysemester');
  Route::get('/topic/{code}', 'TopicController@showBySubject');
  Route::get('/topic/{code}/unit/{unit_no}', 'TopicController@showByUnit');
  Route::get('/subtopic/{topic_id}', 'SubTopicController@showByTopicId');
  Route::post('/content/{subtopic_id}','ContentController@showBySubtopicId');

});
Route::controllers([
 	'auth' => 'Auth\AuthController',
 'password' => 'Auth\PasswordController',
 ]);
 Route::get('/sendemail',function(){

  return view('auth/password');
 });
 Route::get('/reset',function(){

  return view('auth/reset');
 });
Route::get('/', 'HomeController@start');
Route::get('/home', 'HomeController@start');
Route::get('/dashboard', 'DashboardController@start');

Route::get('/completeprofile', function(){
  if(Auth::check())
  {
  return \View::make('completeprofile')->with('name','ritesh');
}
else {
return Redirect::to('/home');
}

});
Route::get('/videos','VideoController@initial');
Route::get('/videos/{videoId}','VideoController@getById');
Route::get('login/fb', 'FacebookController@login');
Route::get('login/fb/callback', 'FacebookController@loginCallback');
Route::post('doverification',function(){
return View('emailverify')->with ('message',$message);
});
Route::get('/test',function(){

  return view('test')->with('name','ritesh');
});
Route::get('register/verify/{confirmationCode}','RegistrationController@confirm');


Route::get('socket', 'SocketController@index');
Route::post('sendmessage', 'SocketController@sendMessage');
Route::get('writemessage', 'SocketController@writemessage');
