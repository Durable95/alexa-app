<?php

namespace Develpr\AlexaApp\Response\Directives\Dialog\Template;

class TextContentItem
{
    const TYPE = 'PlainText';
	public $text = '';

    public function getType()
    {
        return $this::TYPE;
    }
	
	public function __construct($text)
    {
        $this->text = $text;
    }

	public function setText($text) {
		$this->text = $text;
	}

    public function toArray()
    {
        return [
            'type' => $this->getType(),
            'text' => $this->text
        ];
    }
}