<?php

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




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');




Route::namespace('Client')->group(function () {

    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/contactus', 'IndexController@contactus')->name('contactus');
    Route::post('/savemessage', 'IndexController@savemessage')->name('save.message');
    Route::get('/sabt', 'IndexController@sabt')->name('sabt');
    Route::get('/hesabresi', 'IndexController@hesabresi')->name('hesabresi');
    Route::get('/hoghoghi', 'IndexController@hoghoghi')->name('hoghoghi');


});






// dashboard
Route::prefix('dashboard')->namespace('Admin')->middleware(['auth', 'CheckAdmin'])->group(function () {

    Route::get('/', 'AdminController@index')->name('admin');








        Route::get('setting', 'SettingController@index')->name('setting');
        Route::post('getsetting', 'SettingController@getsetting')->name('get.setting');
        Route::post('savelogoimage', 'SettingController@savelogoimage')->name('save.logoimage');
        Route::post('savebannerimage', 'SettingController@savebannerimage')->name('save.bannerimage');
        Route::post('savesetting', 'SettingController@savesetting')->name('save.setting');




        Route::get('customer', 'CustomerController@index')->name('customer.list');
        Route::post('getcustomer', 'CustomerController@getcustomer')->name('get.customer');
        Route::post('savecustomer', 'CustomerController@savecustomer')->name('save.customer');
        Route::post('deletecustomer', 'CustomerController@deletecustomer')->name('delete.customer');




//group
        Route::get('article', 'ArticleController@index')->name('article.group.list');
        Route::post('getarticlegroups', 'ArticleController@getarticlegroups')->name('get.articlegroups');
        Route::post('savegroup', 'ArticleController@savegroup')->name('save.articlegroup');
        // article
        Route::get('articles/{id}', 'ArticleController@articles')->name('articles');
        Route::post('getarticles', 'ArticleController@getarticles')->name('get.articles');
        Route::post('savearticle', 'ArticleController@savearticle')->name('save.article');
        Route::post('savearticleimage', 'ArticleController@savearticleimage')->name('save.articleimage');
        Route::post('changeorder', 'ArticleController@changeorder')->name('changeorder.article');
        Route::post('deletearticle', 'ArticleController@deletearticle')->name('delete.article');
        Route::post('savearticlepdf', 'ArticleController@savearticlepdf')->name('save.articlepdf');
        Route::post('savearticleattr', 'ArticleController@savearticleattr')->name('save.articleattr');
        //content
        Route::get('articles/articles-content/{id}', 'ArticleController@articlecontent')->name('get.articlecontent');
        Route::post('getarticlecontent', 'ArticleController@getarticlecontent')->name('get.articlecontent');
        Route::post('savearticlecontent', 'ArticleController@savearticlecontent')->name('save.articlecontent');
        Route::post('deletecontent', 'ArticleController@deletecontent')->name('delete.content');
        Route::post('changecontentorder', 'ArticleController@changecontentorder')->name('change.contentorder');
        Route::post('savefile', 'ArticleController@savefile')->name('save.file');
        Route::post('savegallery', 'ArticleController@savegallery')->name('save.gallery');
        Route::post('deletegalleryimage', 'ArticleController@deletegalleryimage')->name('delete.galleryimage');
        Route::post('changepublisharticle', 'ArticleController@changepublisharticle')->name('changepublish.article');
        // content new
        Route::get('newcontent', 'ArticleController@newcontent')->name('new.content');
        Route::post('newcontentreload', 'ArticleController@newcontentreload')->name('new.content.reload');




    // slider
    Route::get('slider', 'SliderController@index')->name('slider');
    Route::post('getslider', 'SliderController@getslider')->name('getslider');
    Route::post('savesliderimage', 'SliderController@savesliderimage')->name('save.sliderimage');
    Route::post('deletesliderimage', 'SliderController@deletesliderimage')->name('delete.sliderimage');
    Route::post('deleteslider', 'SliderController@deleteslider')->name('delete.slider');
    Route::post('changepublishslider', 'SliderController@changepublishslider')->name('changepublish.slider');
    Route::post('saveimagedetails', 'SliderController@saveimagedetails')->name('saveimage.details');








    Route::get('posts', 'CommentController@index')->name('posts');
    Route::post('getcomment', 'CommentController@getcomment')->name('get.comment');



    Route::get('changeuserinfo', 'UserController@changeuserinfo')->name('changeuserinfo');
    Route::post('getuserinfo', 'UserController@getuserinfo')->name('getuserinfo');
    Route::post('saveuserinfo', 'UserController@saveuserinfo')->name('saveuserinfo');





















});
