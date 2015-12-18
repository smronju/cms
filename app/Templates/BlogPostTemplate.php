<?php

namespace SundaySim\Templates;

use Carbon\Carbon;
use Illuminate\View\View;
use SundaySim\Post;

class BlogPostTemplate extends AbstractTemplate{

	protected $view = 'blog.post';
	protected $posts;

	public function __construct(Post $posts){
		$this->posts = $posts;
	}

	public function prepare(View $view, array $parameters){
		$post = $this->posts->where('id', $parameters['id'])->where('slug', $parameters['slug'])->first();
		
		$view->with('post', $post);
	}


}