<?php

namespace Develpr\AlexaApp\Response\Directives\Dialog\Template;

class BodyTemplate6 extends BaseTemplate
{
    const TYPE = 'BodyTemplate6';
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
            'image' => 'Image',
            'textContent' => $this->textContent->toArray()
        ], parent::toArray());
    }
}