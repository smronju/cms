<?php

namespace SundaySim;

// use Illuminate\Database\Eloquent\Model;
use Baum\Node;

class Page extends Node 
{
    protected $fillable = ['title', 'name', 'uri', 'content', 'template'];

    public function setNameAttribute($value){
    	$this->attributes['name'] = $value ? : null;
    }

    public function setTemplateAttribute($value){
    	$this->attributes['template'] = $value ? : null;
    }

    public function updateOrder($order, $orderPage){
    	$orderPage = $this->findOrFail($orderPage);

    	if($order == 'before'){
    		$this->moveToLeftOf($orderPage);
    	}elseif ($order == 'after') {
    		$this->moveToRightOf($orderPage);
    	}elseif ($order == 'childOf') {
    		$this->makeChildOf($orderPage);
    	}
    }
}
