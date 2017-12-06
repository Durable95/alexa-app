<?php

namespace Develpr\AlexaApp\Response\Directives\Dialog\Template;

class BodyTemplate1 extends BaseTemplate
{
    const TYPE = 'BodyTemplate1';
	private $textContent = null;

    public function getType()
    {
        return $this::TYPE;
    }
	
	public function setTextContent($type, $text) {
		if ($this->textContent == null) {
			$this->textContent = new TextContent();
		}
		
		$this->textContent->addItem($type, $text);
	}

    public function toArray()
    {
        return array_merge([
            'title' => 'string',
            'textContent' => $this->textContent->toArray()
        ], parent::toArray());
    }
}