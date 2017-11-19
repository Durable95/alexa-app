<?php

namespace Develpr\AlexaApp\Response\Directives\Dialog\Template;

abstract class BaseTemplate
{
    abstract public function getType();
	
	public $backButton = 'VISIBLE';

	public function toArray()
    {
        return [
            'type' => $this->getType(),
			'backButton' => $this->backButton
        ];
    }
}
