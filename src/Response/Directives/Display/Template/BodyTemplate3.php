<?php

namespace Develpr\AlexaApp\Response\Directives\Dialog\Template;

class BodyTemplate3 extends BaseTemplate
{
    const TYPE = 'BodyTemplate3';
	
	private $textContent = null;
	private $image = null;

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
	
	public function setImage($description, $image) {
		$this->image = new BackgroundImage($description, $image);
	}

    public function toArray()
    {
        return array_merge([
            'image' => $this->image->toArray(),
            'textContent' => $this->textContent->toArray()
        ], parent::toArray());
    }
}