<?php

namespace SundaySim\Templates;

use Carbon\Carbon;
use Illuminate\View\View;
use SundaySim\Post;

class HomeTemplate extends AbstractTemplate{

	protected $view = 'home';
	protected $posts;

	public function __construct(Post $posts){
		$this->posts = $posts;
	}

	public function prepare(View $view, array $parameter){
		$posts = $this->posts->with('author')->where('published_at', '<', Carbon::now())->orderBy('published_at', 'desc')->take(5)->get();

		$view->with('posts', $posts);
	}


}