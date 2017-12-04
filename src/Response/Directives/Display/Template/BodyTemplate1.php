<?php

namespace Develpr\AlexaApp\Response\Directives\Dialog\Template;

class BodyTemplate1 extends BaseTemplate
{
    const TYPE = 'BodyTemplate1';
	private $backgroundImage = null;
	private $textContent = null;

    public function getType()
    {
        return $this::TYPE;
    }
	
	public function setBackgroundImage($description, $backgroundImage) {
		$this->backgroundImage = new BackgroundImage($description, $backgroundImage);
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
            'backgroundImage' => $this->backgroundImage->toArray(),
            'title' => 'string',
            'image' => 'Image',
            'textContent' => $this->textContent->toArray()
        ], parent::toArray());
    }
}