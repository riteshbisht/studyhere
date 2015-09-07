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
//rest api for data
Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function () {

  // to get all the data
  Route::get('/university', 'UniversityController@getAll');

  //get university on the basis of the univeristy code
  Route::get('/university/{code}', 'UniversityController@getByCode');


  //get all the courses
  Route::get('/courses', 'CoursesController@getAll');

  //get course on the basis of code university code
  Route::get('/courses/{code}', 'CoursesController@getByUniversity');

  //get all the subject on the basisi of course code
  Route::get('/subject/{code}', 'SubjectController@showAllSubject');

  //get all the subject on the basis of course code and year
  Route::get('/subject/{code}/year/{year}', 'SubjectController@showAllSubjectByyear');

  //get all the subject on the basis of semester
  Route::get('/subject/{code}/semester/{semester}', 'SubjectController@showAllSubjectBysemester');

  //get all the topics on the basis of subject
  Route::get('/topic/{code}', 'TopicController@showBySubject');

  //get all the topc of subject on the basis of unit no.
  Route::get('/topic/{code}/unit/{unit_no}', 'TopicController@showByUnit');

  //get all the subtopic on the basis of topic id
  Route::get('/subtopic/{topic_id}', 'SubTopicController@showByTopicId');

  //get all the content on the basis of subtopic id
  Route::post('/content/{subtopic_id}','ContentController@showBySubtopicId');

});

//route to regitsration and login
Route::controllers([
 	'auth' => 'Auth\AuthController',
 'password' => 'Auth\PasswordController',
 ]);

//route to send email
 Route::get('/sendemail',function(){

  return view('auth/password');
 });



 //get login page

 Route::get('/SignIn',function(){

   return view('signin');
 });

 
 //route to reset password
 Route::get('/reset',function(){

  return view('auth/reset');
 });

 //route to main page
Route::get('/', 'HomeController@start');

//route to mainpage same as '/'
Route::get('/home', 'HomeController@start');

//route to dashboard
Route::get('/dashboard', 'DashboardController@start');


//route to completeprofilepage
Route::get('/completeprofile', function(){
  if(Auth::check())
  {
  return \View::make('completeprofile')->with('name','ritesh');
}
else {
return Redirect::to('/home');
}

});

//route to get videos
Route::get('/videos','VideoController@initial');

//route to get particular videos
Route::get('/videos/{videoId}','VideoController@getById');

//rouet to login facebook
Route::get('login/fb', 'FacebookController@login');

//route to facebook callback
Route::get('login/fb/callback', 'FacebookController@loginCallback');

//route to do verification
Route::post('doverification',function(){
return View('emailverify')->with ('message',$message);
});
Route::get('/test',function(){

  return view('test')->with('name','ritesh');
});


//rouet to forum page
Route::get('/forum',function(){

  return view('forum');
});

//route to forum handlechat
Route::post('/forum','ForumController@handleChat');

Route::get('/', 'HomeController@start');


Route::get('/home', 'HomeController@start');


//route to notes
Route::get('/notes',function(){
  return view('notes');
});
//rouet to register verify
Route::get('register/verify/{confirmationCode}','RegistrationController@confirm');
