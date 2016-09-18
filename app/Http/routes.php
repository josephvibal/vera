<?php


Route::get('/cropic/index', 'CropController@getHome');
Route::post('/cropic/upload', 'CropController@postUpload');
Route::post('/cropic/crop', 'CropController@postCrop');


Route::get('/', ['as'	=> 'home','uses'	=> 'GuestHomeController@home']);

Route::get('/about', ['as'	=> 'about','uses'	=> 'GuestHomeController@about']);

Route::get('/blog',['as' => 'blog', 'uses' => 'PostController@index']);

Route::get('/contact-us',['as' => 'contact_us', 'uses' => 'GuestHomeController@contact_us']);

// display list of posts
Route::get('/user/{id}','UserController@user_posts')->where('id', '[0-9]+');

// display single post
Route::get('/blog/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');


Route::group(['middleware' => ['guest']], function () {

        /*recover account*/
    Route::get('account/recover/{code}',array(
            'as'    =>  'account-recover-account',
            'uses'  =>  'GuestHomeController@getRecoverAccount'
        ));	
	
	Route::post('/forgot-password', [
		'as'	=> 'post-forgot-password',
		'uses'	=> 'GuestHomeController@postforgotPassword'
		]);	
	
	Route::get('/forgot-password', [
		'as'	=> 'forgot-password',
		'uses'	=> 'GuestHomeController@forgotPassword'
		]);	

	Route::get('/account-activate/{code}', [
			'as'	=> 'account-activate',
			'uses'	=> 'GuestHomeController@account_activate'
			]);	


	Route::get('/login', [
			'as'	=> 'login',
			'uses'	=> 'GuestHomeController@login'
			]);

	Route::post('/login', [
			'as'	=> 'post-login',
			'uses'	=> 'GuestHomeController@post_login'
		]);
});

//auth
Route::group(['middleware' => ['auth']], function () {
		

		//update company avatar
		Route::post('/update-company-avatar',[
				'as'	=>	'update-company-avatar',
				'uses'	=>	'ClientController@updateCompanyAvatar'
			]);


		//update company info
		Route::post('/update-company-info',[
				'as'	=> 'updateCompanyInfo',
				'uses'	=> 'ClientController@updateCompanyInfo'
			]);

		//update personal info
		Route::post('/update-pesonal-info',[
			'as'	=>	'update-pesonal-info',
			'uses'	=>	'UserController@update_pesonal_info'
			]);

		//update avatar
		Route::post('/update-avatar',[
				'as'	=>	'update-avatar',
				'uses'	=>	'UserController@updateAvatar'
			]);

		//update password
		Route::post('/update_password',[
				'as'	=>	'user_update_password',
				'uses'	=>	'UserController@post_update_password'
			]);	
		//user profile
		Route::get('/profile',[
			'as'	=>	'profile',
			'uses'	=>	'UserController@showProfile'
			]);
		Route::get('/profile/account-setting',[
			'as'	=>	'profile-setting',
			'uses'	=>	'UserController@profileSetting'
			]);

		//force changepassword/change password
		Route::get('/force-change-password',[
					'as'	=>	'change-password',
					'uses'	=>	'AuthUserController@forcechangepassword'
					]);

		Route::post('/force-change-password',[
					'as'	=>	'post-change-password',
					'uses'	=>	'UserController@forcepostchangepassword'
					]);

		//get user avatar
		Route::get('/get_user_images/',['as' => 'getUserImages', 'uses' => 'ImageController@index']);

		//get company logo
		Route::get('/get_company_logo/',['as' => 'getComapnylogo', 'uses' => 'ImageController@company']);

			// show new post form
		Route::get('/new-post','PostController@create');



	

		Route::get('/logout', [
		'as'	=> 'logout',
		'uses'	=> 'AuthUserController@logout',
		
		]); 
	
	Route::group(['middleware' => ['auth','admin','notForcedchanged']], function () {
		
Route::post('dropzone/uploadFiles', 'DropzoneController@uploadFiles');

		
		Route::post('/request/reject',[
			'as'	=>	'approve-reject',
			'uses'	=>	'AuthUserController@reject_request'
			]);

		Route::post('/request/approve',[
			'as'	=>	'approve-request',
			'uses'	=>	'AuthUserController@approve_request'
			]);

		Route::get('/request', [
		'as'	=> 'request',
		'uses'	=> 'AuthUserController@request',
		
		]);

		Route::post('/search-user',[
				'as'	=>	'search-user',
				'uses'	=>	'AuthUserController@post_search_user'
			]);

		Route::post('/system-users/update-privilege',[
			'as'	=>  'update-privilege',
			'uses'	=>	'AuthUserController@update_user_privilege'
			]);		

		Route::get('/system-users/account-setting/user/{id}',[
			'as'	=>  'get-client-user-setting',
			'uses'	=>	'AuthUserController@get_client_user_setting'
			]);		

		Route::get('/system-users/user/{client_id}/files',[
			'as'	=>  'get-user-all-files',
			'uses'	=>	'AuthUserController@get_user_files'
			]);	

		Route::get('/system-users/user/{id}/blog/published',[
				'as'	=>  'get-user-all-blog-published',
				'uses'	=>	'AuthUserController@get_user_publish_blog'
			]);	


		Route::get('/system-users/user/{id}/blog/drafts',[
				'as'	=>  'get-user-all-blog-draft',
				'uses'	=>	'AuthUserController@get_user_draft_blog'
			]);	

		Route::get('/system-users/user/{id}/blog/all',[
				'as'	=>  'get-user-all-blog',
				'uses'	=>	'AuthUserController@get_user_by_id_all_blog'
			]);	

		Route::get('/system-users/user/{id}',[
				'as'	=>  'get-user',
				'uses'	=>	'AuthUserController@get_user_by_id'
			]);	


		//	avatart/ company logo

		Route::get('/get-company-logo/{id}',[
				'as'	=>  'get-company-logo',
				'uses'	=>	'ImageController@get_company_logo'
			]);	

		Route::get('/get-user-avatar/{id}',[
				'as'	=>  'get-user-avatar-by-id',
				'uses'	=>	'ImageController@get_user_avatar_by_id'
			]);	

		//store employee view
		Route::get('/system-users/show-all',[
				'as'	=>  'show-all-system-user',
				'uses'	=>	'AuthUserController@show_all_user'
			]);		

		//store employee view
		Route::post('/system-users/create',[
				'as'	=>  'create-new-system-user',
				'uses'	=>	'AuthUserController@create_new_user'
			]);

		//create employee view
		Route::get('/system-users/add-new-user',[
				'as'	=>  'add-new-system-user',
				'uses'	=>	'AuthUserController@add_new_user'
			]);

		//get files
		Route::get('/file/{id}/{fileid}',['as' => 'getfile', 'uses' => 'FileController@getfile']);
		

		Route::post('/file-share-create',[
			'as'	=>	'file-share-create',
			'uses'	=>	'FileController@file_share_create'
		]);

		Route::post('/view-file-for-share',[
			'as'	=>	'postViewFile',
			'uses'	=>	'FileController@postviewshareFile'
		]);

		Route::get('/dashboard', [
		'as'	=> 'dashboard',
		'uses'	=> 'AuthUserController@dashboard',
		
		]);

		Route::post('/create-company', [
		'as'	=> 'create-company',
		'uses'	=> 'AuthUserController@create_company',
		]);

		Route::get('/file/{id}', [
			'as'	=> 'get-file',
			'uses'	=> 'FileController@view_list_of_file',
			]); 


		Route::get('/add-company', [
			'as'	=> 'add-company',
			'uses'	=> 'AuthUserController@add_company',
			
			]); 

		Route::get('/company/{id}', [
			'as'	=> 'company-get',
			'uses'	=> 'AuthUserController@get_company',
			
			]); 

		Route::get('/company', [
			'as'	=> 'company',
			'uses'	=> 'AuthUserController@company',
			
			]); 

		Route::post('/company', [
			'as'	=> 'post-company',
			'uses'	=> 'AuthUserController@search_post_company',
			
			]); 		

		Route::get('/users', [
			'as'	=> 'users-show',
			'uses'	=> 'UserController@showall'
			]);		

		Route::get('/create_employee', [
			'as'	=> 'create_employee',
			'uses'	=> 'GuestHomeController@get_create_employee'
			]);

		Route::post('/create_employee', [
				'as'	=> 'post_create_employee',
				'uses'	=> 'GuestHomeController@post_create_employee',
				//'middleware' => 'auth'
				]);

	});

	Route::group(['middleware' => ['auth','client','notForcedchanged']], function () {

		Route::get('/my-request/rejected/',[
				'as'	=>	'client-rejected-request',
				'uses'	=>	'ClientController@rejected_request'
		]);	


		Route::get('/my-request/pending/',[
				'as'	=>	'client-pending-request',
				'uses'	=>	'ClientController@pending_request'
		]);	

		Route::get('/my-request/approved/',[
				'as'	=>	'client-approved-request',
				'uses'	=>	'ClientController@approved_request'
		]);		


		Route::post('/my-request/update/',[
				'as'	=>	'client-update-request',
				'uses'	=>	'ClientController@update_request'
		]);



		Route::post('/my-request/create',[
				'as'	=>	'client-create-request',
				'uses'	=>	'ClientController@create_request'
			]);

		Route::get('/my-request/showall',[
				'as'	=> 'client-show-files',
				'uses'	=>	'ClientController@show_all_request'
			]);

		Route::get('/my-request/add',[
				'as'	=>	'client-request',
				'uses'	=>	'ClientController@request_view'
			]);		

		//get files
		Route::get('/my-files/{id}/{fileid}',['as' => 'getClientfile', 'uses' => 'FileController@getClientfile']);
		
		Route::get('/my-files',[
				'as'	=>	'clientfiles',
				'uses'	=>	'ClientController@getClientFile'
			]);

		Route::get('/my-company-profile',[
				'as'	=>	'clientdashboard',
				'uses'	=>	'ClientController@mydashboard'
			]);

		Route::get('/my-blog/showall',[
				'as'	=>	'clientpost',
				'uses'	=>	'ClientController@showAllPosts'
			]);

		Route::get('/my-blog/create-new-post',[
		'as'	=>	'my-newpost',
		'uses'	=>	'ClientController@newpost'
			]);		

	});

	Route::group(['middleware' => ['auth','notForcedchanged']], function () {

			Route::post('/my-request/view-edit/',[
				'as'	=>	'client-view-edit-request',
				'uses'	=>	'ClientController@view_edit_request'
			]);		

			// add comment
	Route::post('comment/add','CommentController@store');
	
	// delete comment
	Route::post('comment/delete/{id}','CommentController@destroy');

			// delete post
	Route::get('/my-blog/my-posts/delete/{id}','PostController@destroy');

			// display user's active post
		Route::get('/my-blog/my-posts','PostController@user_posts');

			// display user's drafts
		Route::get('/my-blog/my-drafts','PostController@user_posts_draft');

			// update post
		Route::post('/update-post','PostController@update');

			// edit post form
		Route::get('/my-blog/edit/{slug}','PostController@edit');
					// save new post
		Route::post('/new-post','PostController@store');

		Route::get('/my-blog/showall',[
				'as'	=>	'clientpost',
				'uses'	=>	'ClientController@showAllPosts'
			]);

		Route::get('/my-blog/create-new-post',[
		'as'	=>	'my-newpost',
		'uses'	=>	'ClientController@newpost'
			]);	

	});

});

	