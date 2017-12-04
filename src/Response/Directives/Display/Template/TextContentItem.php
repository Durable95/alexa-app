<?php

namespace Develpr\AlexaApp\Response\Directives\Dialog\Template;

class TextContentItem
{
	const TYPE_RICHTEXT = 'RichText';
	const TYPE_PLAINTEXT = 'PlainText';
	
	public $text = '';
	public $type = 'PlainText';
	
	public function __construct($text, $type = TextContentItem::TYPE_PLAINTEXT)
    {
        $this->text = $text;
        $this->type = $type;
    }

	public function setText($text) {
		$this->text = $text;
	}

    public function toArray()
    {
        return [
            'type' => $this->type,
            'text' => $this->text
        ];
    }
}