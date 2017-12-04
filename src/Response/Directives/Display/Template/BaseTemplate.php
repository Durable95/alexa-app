<?php

namespace Develpr\AlexaApp\Response\Directives\Dialog\Template;

abstract class BaseTemplate
{
    abstract public function getType();
	
	public $backButton = 'HIDDEN';
	public $token = 'string';
	public $title = 'string';
	
	public function setToken($token) {
		$this->token = $token;
	}
	public function getToken() {
		return $this->token;
	}
	
	public function setTitle($title) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}

	public function toArray()
    {
        return [
            'type' => $this->getType(),
			'backButton' => $this->backButton,
			'token' => $this->token,
			'title' => $this->title
        ];
    }
}
