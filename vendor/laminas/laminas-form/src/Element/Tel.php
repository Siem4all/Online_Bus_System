<?php

namespace Laminas\Form\Element;

use Laminas\Filter\StringTrim;
use Laminas\Filter\StripNewlines;
use Laminas\Form\Element;
use Laminas\InputFilter\InputProviderInterface;
use Laminas\Validator\Regex as RegexValidator;
use Laminas\Validator\ValidatorInterface;

class Tel extends Element implements InputProviderInterface
{
    /**
     * Seed attributes
     *
     * @var array
     */
    protected $attributes = [
        'type' => 'tel',
    ];

    /**
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * Get validator
     *
     * @return ValidatorInterface
     */
    protected function getValidator()
    {
        if (null === $this->validator) {
            $this->validator = new RegexValidator("/^[^\r\n]*$/");
        }
        return $this->validator;
    }

    /**
     * Provide default input rules for this element
     *
     * @return array
     */
    public function getInputSpecification()
    {
        return [
            'name' => $this->getName(),
            'required' => true,
            'filters' => [
                ['name' => StringTrim::class],
                ['name' => StripNewlines::class],
            ],
            'validators' => [
                $this->getValidator(),
            ],
        ];
    }
}
