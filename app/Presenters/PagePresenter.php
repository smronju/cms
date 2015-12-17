<?php

namespace SundaySim\Presenters;

use Lewis\Presenter\AbstractPresenter;

class PagePresenter extends AbstractPresenter{

	public function uriWildcard(){
		// dd($this);
		return $this->uri . '*';
	}

	public function prettyUri(){
		return '/'.ltrim($this->uri, '/');
	}

	public function linkToPaddedTitle($link){
		$padding = str_repeat('&nbsp;', $this->depth * 4);

		return $padding.link_to($link, $this->title);
	}

	public function PaddedTitle(){
		return str_repeat('&nbsp;', $this->depth * 4).$this->title;
	}
}