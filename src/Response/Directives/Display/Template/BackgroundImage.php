<?php

namespace Develpr\AlexaApp\Response\Directives\Dialog\Template;

class BackgroundImage
{
	public $contentDescription = '';
	public $sources = null;
	
	public function __construct($description, $backgroundImage)
    {
        $this->contentDescription = $description;
		$this->addItem($backgroundImage);
    }
	
	public function addItem($source) {
		if ($this->sources == null) {
			$this->sources = new Sources();
		}
		
		$this->sources->addSource($source);
	}

	public function toArray()
    {
        return [
            'contentDescription' => $this->contentDescription,
			'sources' => $this->sources->toArray()
        ];
    }
}