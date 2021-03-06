<?php

//admin Login, logout, forget password routes
Route::get('login', 'Auth\Admin\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\Admin\LoginController@login');
Route::post('logout', 'Auth\Admin\LoginController@logout')->name('logout');
//show the link request form to reset password
Route::get('password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Send the link - it will use the notification from admin model
Route::post('password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//receive the request from the send email
Route::get('password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('password.reset');
//update password
Route::post('password/reset', 'Auth\Admin\ResetPasswordController@reset')->name('password.update');



Route::namespace('Admin')->group(function () {
    Route::group(['middleware' => ['auth:admin', 'preventBackHistory']], function () {
        // Dashboard
        Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
        //change password
        Route::get('change-password', 'AdminProfileController@changePasswordView')->name('change.password');
        Route::post('change-password', 'AdminProfileController@changePassword')->name('change.password');
        // contact and feedback
        Route::get('contacts', 'ContactFeedbackController@contacts')->name('contacts');
        // Route::get('feedbacks', 'ContactFeedbackController@feedbacks')->name('feedbacks');
        Route::get('contacts/{contactFeedback}', 'ContactFeedbackController@show')->name('contactFeedback.show');
        Route::delete('contact-feedback-delete/{contactFeedback}', 'ContactFeedbackController@contactFeedbackDelete');
        // Icon
        Route::get('rt-icons1', function () {
            return view('admin.others.icons1');
        });
        Route::get('rt-icons2', function () {
            return view('admin.others.icons2');
        });

        // Backups
        Route::resource('backups', 'BackupController')->only(['index', 'store', 'destroy']);
        Route::get('backups/{file_name}', 'BackupController@download')->name('backups.download');
        Route::delete('backups', 'BackupController@clean')->name('backups.clean');

        Route::get('member-requests', 'MemberController@requests')->name('members.requests');
        Route::get('member-accept/{member}', 'MemberController@accept')->name('members.accept');

        Route::resources(
            [
                'admins' => 'AdminController',
                // 'users' => 'UserController',
                'abouts' => 'AboutController',
                'galleries' => 'GalleryController',
                'activities' => 'ActivityController',
                'events' => 'EventController',
                'blogs' => 'BlogController',
                'testimonials' => 'TestimonialController',
                'alumnis' => 'AlumniController',
                'members' => 'MemberController',
                'settings' => 'SettingController',
            ]
        );
    });
});
