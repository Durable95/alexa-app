<?php

namespace Develpr\AlexaApp\Response\Directives\Dialog\Template;

class TextContent
{
	public $textContents = array();
	
	public function addItem($type, $text) {
		$this->textContents[$type] = $text;
	}

    public function toArray()
    {
		$array = array();
		
		foreach ($this->textContents as $key => $value) {
			$array[$key] = $value->toArray();
		}
		
		return $array;
    }
}