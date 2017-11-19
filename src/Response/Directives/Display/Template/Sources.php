<?php

namespace Develpr\AlexaApp\Response\Directives\Dialog\Template;

class Sources
{
	public $sources = array();
	
	public function addSource($source) {
		array_push($this->sources, $source);
	}

    public function toArray()
    {
		$array = array();
		
		foreach ($this->sources as $value) {
			$array[] = array("url" => $value);
		}
		
		return $array;
    }
}