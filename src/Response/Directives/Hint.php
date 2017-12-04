<?php

namespace Develpr\AlexaApp\Response\Directives;

class Hint extends Directive
{
    const TYPE = 'Hint';
	
    private $text;
	
    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getType()
    {
        return $this::TYPE;
    }

	public function toArray()
    {
        return [
            'type' => $this->getType(),
            'hint' => [
				'type' => 'PlainText',
				'text' => $this->text
			]
        ];
    }
}