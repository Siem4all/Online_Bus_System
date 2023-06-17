<?php

namespace Laminas\Form\View\Helper;

use Laminas\Form\ElementInterface;

class FormHidden extends FormInput
{
    /**
     * Attributes valid for the input tag type="hidden"
     *
     * @var array
     */
    protected $validTagAttributes = [
        'name'           => true,
        'disabled'       => true,
        'form'           => true,
        'type'           => true,
        'value'          => true,
        'autocomplete'   => true,
    ];

    /**
     * Determine input type to use
     *
     * @param  ElementInterface $element
     * @return string
     */
    protected function getType(ElementInterface $element)
    {
        return 'hidden';
    }
}
