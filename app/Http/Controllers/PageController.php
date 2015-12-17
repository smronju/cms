<?php

namespace SundaySim\Http\Controllers;

use SundaySim\Page;

class PageController extends Controller{

	public function show(Page $page, array $parameters){
		return view('page', compact('page'));
	}
}