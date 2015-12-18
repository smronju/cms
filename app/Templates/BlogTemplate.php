<?php

namespace SundaySim\Templates;

use Carbon\Carbon;
use Illuminate\View\View;
use SundaySim\Post;

class BlogTemplate extends AbstractTemplate{

	protected $view = 'blog';
	protected $posts;

	public function __construct(Post $posts){
		$this->posts = $posts;
	}

	public function prepare(View $view, array $parameter){
		$posts = $this->posts->with('author')->where('published_at', '<', Carbon::now())->orderBy('published_at', 'desc')->paginate(15);

		$view->with('posts', $posts);
	}


}