<?php

namespace SundaySim\View;

// use Illuminate\Filesystem\Filesystem;
use Illuminate\View\FileViewFinder;

class ThemeViewFinder extends FileViewFinder{
	protected $activeTheme;
	protected $basePath;

	// public function __construct(Filesystem $file, $path){
	// 	parent::__construct($file, $path);
	// }

	public function setBasePath($path){
		$this->basePath = $path;
	}

	public function setActiveTheme($theme){
		$this->activeTheme = $theme;
		array_unshift($this->paths, $this->basePath.'/'.$theme.'/views');
	}
}