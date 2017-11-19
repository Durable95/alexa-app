<?php

namespace Develpr\AlexaApp\Response\Directives\Display;

use Develpr\AlexaApp\Response\Directives\Directive;

/**
 * @see https://developer.amazon.com/de/docs/custom-skills/display-interface-reference.html
 * @package Develpr\AlexaApp\Response\Directives\Display
 */
class RenderTemplate extends Directive
{
    const TYPE = 'Display.RenderTemplate';
	
    private $template;
	
    public function __construct($template)
    {
        $this->template = $template;
    }

    public function getType()
    {
        return $this::TYPE;
    }
	
	public function toArray()
    {
        return [
            'type' => $this->getType(),
            'template' => $this->template->toArray()
        ];
    }
}