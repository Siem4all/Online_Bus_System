<?php

namespace Laminas\Form\View\Helper;

use Laminas\Form\ElementInterface;

class FormEmail extends FormInput
{
    /**
     * Attributes valid for the input tag type="email"
     *
     * @var array
     */
    protected $validTagAttributes = [
        'name'           => true,
        'autocomplete'   => true,
        'autofocus'      => true,
        'disabled'       => true,
        'form'           => true,
        'list'           => true,
        'maxlength'      => true,
        'minlength'      => true,
        'multiple'       => true,
        'pattern'        => true,
        'placeholder'    => true,
        'readonly'       => true,
        'required'       => true,
        'size'           => true,
        'type'           => true,
        'value'          => true,
    ];

    /**
     * Determine input type to use
     *
     * @param  ElementInterface $element
     * @return string
     */
    protected function getType(ElementInterface $element)
    {
        return 'email';
    }
}
