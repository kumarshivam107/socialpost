<?php

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
    return redirect('/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('typechecker');

Route::get('/error','affiliateController@error');

Route::group(['middleware' => ['auth','administator']],function(){
    //Id Activation Request:-
    Route::match(['get','post'],'/admin/id-activation','superadminController@idactivation');
    //Id Activation Request:-
    Route::post('/admin/approve-id-activation','superadminController@approve_id_activation');
    //Id De-Activation Request:-
    Route::post('admin/disapprove-id-activation','superadminController@disapprove_id_activation');
    //Employee List:-
    Route::match(['get','post'],'/admin/userlist','superadminController@userlist');
    //Block User:-
    Route::get('admin/blockuser/{id}','superadminController@blockuser');
    //Pending Admission:-
    Route::match(['get','post'],'/admin/pending-admission','superadminController@pendingadmission');
    //Approval Admission:-
    Route::match(['get','post'],'/admin/approved-admission','superadminController@approvedadmission');
    //All Admission:-
    Route::get('/admin/reported-admission','superadminController@reportedadmission');
    //Download Recepit:-
    Route::match(['get','post'],'/admin/download-recepit/{id}','superadminController@download_recepit');
    //Download Docs:-
    Route::match(['get','post'],'/admin/download-docs/{id}','superadminController@download_docs');
    Route::match(['get','post'],'/admin/pending-admission-details/{id}','superadminController@pending_admission_details');
    //Add College:-
    Route::match(['get','post'],'/admin/add-college','superadminController@add_college');
    //View College List:-
    Route::match(['get','post'],'/admin/view-college-list','superadminController@view_college_list');
    //Delete College:-
    Route::match(['get','post'],'/admin/delete-college/{id}','superadminController@delete_college');
    //Getting All Support Message:-
    Route::match(['get','post'],'/admin/support-request','superadminController@support_request');
    //Adding Promotional Material:-
    Route::match(['get','post'],'/admin/add-promotional-material','superadminController@add_promotional');
    //View Promotional  Material:-
    Route::match(['get','post'],'/admin/view-promotional-material','superadminController@view_promotional');
    //Download Promotional Material:-
    Route::match(['get','post'],'/admin/promovideo/download/{id}','superadminController@download_promotional');
    //Delete Promotional Material:-
    Route::get('/admin/promovideo/delete/{id}','superadminController@delete_promovideo');
    //Notification to all Users:-
    Route::match(['get','post'],'/admin/send-notification','superadminController@send_notification');
    //View Notification:-
    Route::match(['get','post'],'/admin/view-notification','superadminController@view_notification');
    //Notification Mark as Read:-
    Route::match(['get','post'],'/admin/notification/marks-as-read','superadminController@mark_as_read');
    //Delete User:-
    Route::get('/admin/deleteuser/{id}','superadminController@delete_user_account');
    //Support Reply:-
    Route::get('/admin/add-support-reply/{id}','superadminController@add_support_reply');
    Route::post('/admin/add-reply','superadminController@add_reply');

    Route::match(['get','post'],'/add-blog','publicController@add_blog');
    Route::match(['get','post'],'/view-blog','publicController@view_blog');
    Route::match(['get','post'],'/edit-blog-details/{id}','publicController@editblog');
    Route::get('/delete-blog/{id}','publicController@deleteblog');
    Route::post('/update-blog','publicController@updateblog');
   
});

Route::group(['middleware' => ['auth','affiliate']],function(){
    Route::get('/affiliate/home','affiliateController@home');
    Route::match(['get','post'],'/affiliate/new-bonafide-request','affiliateController@new_bonafide_request');
    Route::get('/affiliate/approve-bonafide-request','affiliateController@approve_bonafide');
    Route::match(['get','post'],'/affiliate/bonafide-request','affiliateController@bonafide_request');
    Route::match(['get','post'],'/affiliate/new-support-ticket','affiliateController@new_support_ticket');
    Route::match(['get','post'],'/affiliate/support-history','affiliateController@support_history');
    Route::match(['get','post'],'/affiliate/submit-details','affiliateController@submit_detail');
    Route::match(['get','post'],'/affiliate/edit-details/{id}','affiliateController@edit_details');
    Route::match(['get','post'],'/affiliate/update-details','affiliateController@update_details');
    Route::get('/affiliate/busniess-plan','affiliateController@busniess_plan');
    Route::get('/affiliate/promotional-material','affiliateController@promotional');
    Route::get('/affiliate/profile','affiliateController@profile');
    Route::match(['get','post'],'/affiliate/change-password','affiliateController@change_password');
    Route::match(['get','post'],'/affiliate/approved-commission','affiliateController@approved_commission');
    Route::match(['get','post'],'/affiliate/profile-pic-update','affiliateController@profile_pic_update');

    //College List:-
    Route::match(['get','post'],'affiliate/college-list','affiliateController@college_list');
    //Download Promotional Material:-
    Route::match(['get','post'],'/affiliate/promovideo/download/{id}','affiliateController@download_promotional');
    //Delete Promotional Material:-
    Route::get('/affiliate/promovideo/delete/{id}','affiliateController@delete_promovideo');
     //Get College Data Via Ajax Request:-
     Route::get('/affiliate/get-college-data/{id}','affiliateController@get_college_data');
    //Withdraw Earning:-
    Route::match(['get','post'],'/affiliate/withdraw-index','affiliateController@withdraw');
    //Withdraw History:-
    Route::match(['get','post'],'/affiliate/withdraw-history','affiliateController@withdraw_histroy');
    //Affiliate History:-
    Route::match(['get','post'],'/affiliate/view-reply/{id}','affiliateController@view_reply');
    //Download Docs:-
    Route::match(['get','post'],'/affiliate/download-docs/{id}','affiliateController@download_docs');
});

Route::group(['middleware' => ['visitorpages']],function(){
    //Public Content:-
    Route::match(['get','post'],'/index','publicController@index');
});
Route::get('/about','publicController@about');
Route::get('/course-name','publicController@course_name');
Route::get('/colleges','publicController@colleges');
Route::get('/bscc','publicController@bscc');
Route::get('/gallery','publicController@gallery');
Route::get('/contact','publicController@contact');
Route::get('/apply-now','publicController@apply_now');
Route::get('/marwadi-university','publicController@marwadi');
Route::get('/maharshi-markandey-university','publicController@mmu');
Route::get('/venkateshwara-group-of-institutions','publicController@venketswara');
Route::get('/get-all-bscc-college','publicController@get_all_college');
Route::match(['get','post'],'/download-naac-college-list','publicController@naac_college_list');
//College Urls:-
Route::match(['get','post'],'/nit-polytechnic','publicController@nit_polytechnic');
Route::match(['get','post'],'/sanjivani-polytechnic-college-Kopargaon','publicController@sanjivani');
Route::match(['get','post'],'/DHANALAKSHMI-SRINIVASAN-ENGINEERING-COLLEGE','publicController@dhanalakshmi');
ROute::match(['get','post'],'/siddharth-institute-of-engineering-and-technology','publicController@siddarthaa');
Route::match(['get','post'],'/sandip-university-madhubani','publicController@sandip');

//Blog Urls:-
Route::match(['get','post'],'/blog','publicController@blog');
// Route::match(['get','post'],'/blog-post/{id}','publicController@blog_post');
Route::post('/add-comment','publicController@add_comment');
Route::post('/suscribe','publicController@suscribe');
//Three Main Blog Urls:-
Route::match(['get','post'],'/blog-post/5-things-about-bihar-student-credit-card','publicController@bscc_firstblog');
Route::match(['get','post'],'/blog-post/how-to-apply-bihar-student-credit-card','publicController@bscc_secondblog');
Route::match(['get','post'],'/blog-post/how-to-choose-collge-for-getting-bihar-student-credit-card','publicController@bscc_thirdblog');


//Handling Public Post Request:-
Route::post('/handle-newsletter','publicController@handle_newsletter');
Route::post('/handle-contact','publicController@handle_contact');
Route::post('/handle-applynow','publicController@handle_applynow');