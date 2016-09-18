<?php

namespace App\Http\Controllers;
use App\Posts;
use App\User;
use Redirect;
use Illuminate\Http\Request;
use App\ListOfBIRForm;
use App\Http\Requests;
use App\Http\Requests\PostFormRequest;
class PostController extends Controller
{


	public function user_posts()
	{
		//
		$posts = Posts::where('author_id',\Auth::user()->id)->where('active','1')->orderBy('created_at','desc')->paginate(5);
		
		$title = 'Vera | My Posts';
		return view('Client.MyBlog')->with('title','Vera | My Blog')->with('posts',$posts);
	}

	public function user_posts_draft(Request $request)
	{ 	

		$user = \Auth::user();
		$posts = Posts::where('author_id',$user->id)->where('active','0')->orderBy('created_at','desc')->paginate(5);
	
		$title = 'Vera | My Drafts';
		return view('Client.MyBlog')->with('title','Vera | My Blog')->with('posts',$posts);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Request $request,$slug)
	{
		$post = Posts::where('slug',$slug)->first();
		if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin()))
			return view('posts.edit')->with('post',$post)->with('title','Ver | Edit - '.$request->slug);
		else 
		{
			return redirect('/')->withErrors('File not found!');
		}
	}


	public function index(){
		$posts = Posts::where('active','1')->orderBy('created_at','desc')->paginate(5);
		$blogtitle = 'Latest Posts';
		return view('posts.index')->with('posts',$posts)->with('title','vera | blog')->with('blogtitle',$blogtitle);
	}

		/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		// 
		
		if($request->user()->can_post())
		{
			return view('posts.create')->with('title','Vera | Create post');
		}	
		else 
		{
			return redirect('/')->withErrors('You have not sufficient permissions for writing post');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PostFormRequest $request)
	{
		//dd($request->request);
		$post = new Posts();
		$post->title = $request->get('title');
		$post->body = $request->get('body');
		$post->slug = str_slug($post->title);
		
		$duplicate = Posts::where('slug',$post->slug)->first();
		if($duplicate)
		{
			return redirect('new-post')->withErrors('Title already exists.')->withInput();
		}	
		
		$post->author_id = $request->user()->id;
		if($request->has('save'))
		{
			$post->active = 0;
			$message = 'Post saved successfully';			
		}			
		else 
		{
			$post->active = 1;
			$message = 'Post published successfully';
		}
		$post->save();
		return redirect()->back()->with('global',$message);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$post = Posts::where('slug',$slug)->where('active','=',1)->first();

		if($post)
		{
			$comments = $post->comments;	
		}
		else 
		{
			return redirect('/')->withErrors('requested page not found');
		}
		return view('posts.show')->with('post',$post)->with('comments',$comments)->with('title','vera | '.$post->slug);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		//
		$post_id = $request->input('post_id');
		$post = Posts::find($post_id);
		if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
		{
			$title = $request->input('title');
			$slug = str_slug($title);
			$duplicate = Posts::where('slug',$slug)->first();
			if($duplicate)
			{
				if($duplicate->id != $post_id)
				{
					return redirect('edit/'.$post->slug)->withErrors('Title already exists.')->withInput();
				}
				else 
				{
					$post->slug = $slug;
				}
			}
			
			$post->title = $title;
			$post->body = $request->input('body');
			
			if($request->has('save'))
			{
				$post->active = 0;
				$message = 'Post saved successfully';
				//$landing = 'edit/'.$post->slug;
			}			
			else {
				$post->active = 1;
				$message = 'Post updated successfully';
				//$landing = $post->slug;
			}
			$post->save();
	 		return redirect()->back()->with('global',$message);
		}
		else
		{
			return redirect('/')->withErrors('you have not sufficient permissions');
		}
	}

	public function destroy(Request $request, $id)
	{
		//
		$post = Posts::find($id);
		if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
		{
			$post->delete();
		//	$data['message'] = 'Post deleted Successfully';
		}
		else 
		{
		//	$data['errors'] = 'Invalid Operation. You have not sufficient permissions';
		}
		
		return redirect('/my-blog/showall')->with('global','Post Successfully deleted');
	}
}
	