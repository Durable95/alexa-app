<?php

namespace Develpr\AlexaApp\Response\Directives\Dialog\Template;

class BodyTemplate6 extends BaseTemplate
{
    const TYPE = 'BodyTemplate6';
	private $backgroundImage = '';
	private $textContent = '';

    public function getType()
    {
        return $this::TYPE;
    }
	
	public function setBackgroundImage($backgroundImage) {
		$this->backgroundImage = $backgroundImage;
	}
	
	public function setTextContent($textContent) {
		$this->textContent = $textContent;
	}

    public function toArray()
    {
        return array_merge([
            'backgroundImage' => $this->backgroundImage,
            'title' => 'string',
            'image' => 'Image',
            'textContent' => $this->textContent
        ], parent::toArray());
    }
}