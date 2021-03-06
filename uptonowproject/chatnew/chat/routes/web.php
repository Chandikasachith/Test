<?php
use App\Events\WebsocketDemoEvent;
use App\addpro;
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
    
    return view('index');
});


Auth::routes(['verify'=> true]); 

//admin things
Route::group(['middleware'=>['auth','admin']],function(){

     Route::get('/dashboard', function () {    
    
    return view('dashboard');
    });
Route::get('/user','UserpanelController@index');


 /*admin control user profile*/
Route::get('/registered-users','Admin\DashboardController@registered');

Route::get('/edit/{id}','Admin\DashboardController@registerededit');
Route::put('/registered-users-update/{id}','Admin\DashboardController@registeredupdate');
Route::delete('/delete/{id}','Admin\DashboardController@registereddelete');


/*sayuri report generation*/
Route::get('/reportgeneration', 'ReportController@create')->name('h');;
Route::post('/generatereport', 'ReportController@store');
Route::get('/show', 'ReportController@show');
Route::get('/deleteReport/{id}', 'ReportController@deleteReport');
Route::get('/backtoreport', 'ReportController@backto');


/*chamali's*/
Route::get('/sendemail','SendEmailController@ViewSendMail')->name('sendemail');

Route::post('/sendemail/send','SendEmailController@send');
//Route::resource('/sendemail/send','SendEmailController');
Route::get('/mail','SendEmailController@index')->name('index');


//evenets calendar
Route::get('/events','EventCalendarController@index');
Route::get ('/neweventurl','EventCalendarController@display');
Route::post ('/events','EventCalendarController@store');
Route::get('/editdata','EventCalendarController@show');
Route::get('/updateevent/{id}','EventCalendarController@edit');
Route::post('/updateevents/{id}','EventCalendarController@update');
Route::get('/deleteventurl','EventCalendarController@show');
Route::post('/updateevent/{id}','EventCalendarController@destroy');
Route::get('/back','EventCalendarController@back');
Route::get('/addeventback','EventCalendarController@redirect');
Route::get('/back','EventCalendarController@viewpro');

//chamali's admin things
Route::get('/postpro', 'PostsController@create');
Route::post('/post','PostsController@store')->name('project');
Route::get('/viwpro','PostsController@viewpro')->name('viewpro');
Route::get('/role-edit/{id}', 'PostsController@edit');
Route::post('/update/{id}', [
    'as' => 'update', 'uses' => 'Postscontroller@update'
]);
Route::delete('/projectdelete/{id}', 'PostsController@destroy');
Route::get('/backto', 'PostsController@backto');


//add projects admin things
Route::get('/viwnwpro',function(){
    $data = addpro::all()->toArray();
    return view('posts.viwnwpro')->with('data',$data);
});
Route::post('/toggle-approve', 'PostsController@approval');
Route::delete('/delete/{id}', 'PostsController@destroynwpro');
Route::get('/adminaddpro', 'PostsController@addpros');



//imageupload
Route::get('/uploadimg', 'PostsController@uploadimg');
Route::post('/upimg','PostsController@storeimg')->name('uploadimg');
Route::get('/viwimg','PostsController@viewimg')->name('viewimg');
Route::delete('/imgdelete/{id}', 'PostsController@destroyimg');

//teamupload
Route::get('/uploadteam', 'PostsController@uploadteam');
Route::post('/upteam','PostsController@storeteam')->name('uploadteam');
Route::get('/viwteam','PostsController@viewteam')->name('viewteam');
Route::delete('/teamdelete/{id}', 'PostsController@destroyteam');



//post job vacancies

Route::get('/post', 'PostController@create');
Route::post('/p2', 'PostController@store');

Route::get('/showpost', 'PostController@show');



});



//userview calender
Route::get ('/userview','EventCalendarController@userview')->name('eventsuser');
Route::get ('/reguserview','EventCalendarController@userviews')->name('ReguserEventsview');


 Route::get('/chats','ChatsController@index');
Route::get('/messages','ChatsController@fetchMessages');
Route::post('/messages','ChatsController@sendMessage');
//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//contactus
Route::get('/contact','ContactController@index')->name('contact');

Route::post('/contact','ContactController@store');




//userlogin
Route::get('/log','RegformController@UserLogin')->name('logo');

Route::post('/loguser','UserLoginController@LoginUser');
//Route::get('/log','UserLoginController@index')->name('logo');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//chamali's userview
Route::get('/view/{id}', 'PostsController@view');
Route::get('/like/{id}', 'PostsController@like');
Route::post('/like/{id}','PostsController@like')->name('like');
Route::get('/dislike/{id}', 'PostsController@dislike');
Route::post('/dislike/{id}','PostsController@dislike')->name('dislike');
Route::get('/comment/{id}', 'PostsController@comment');
Route::post('/comment/{id}','PostsController@comment')->name('comment');
Route::get('/', 'PostsController@index');
Route::get('/view', 'PostsController@index');


//payment

Route::get('/payment', function () {
    return view('stripe');
});






Route::group(['middleware'=>['auth','user']],function(){


    
//userprofile edit

Route::get('/abcd/{id}','UserProfileeditController@useredit');
Route::put('/user-profile-update/{id}','UserProfileeditController@usereditupdate');

//userview genrated reports
Route::get('/userviewgeneratedreports', 'ReportController@shows');





//addproject chamali
Route::get('/addpro', 'PostsController@addpro');
Route::post('/savepro','PostsController@savepro')->name('savepro');

Route::get('/accptpro',function(){
    $data = addpro::where('approve','1')->get();
    return view('posts.accptpro')->with('data',$data);
});



    });