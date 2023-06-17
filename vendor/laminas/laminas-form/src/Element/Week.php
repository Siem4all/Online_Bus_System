<?php

namespace Laminas\Form\Element;

use DateInterval;
use Laminas\Validator\DateStep as DateStepValidator;
use Laminas\Validator\GreaterThan as GreaterThanValidator;
use Laminas\Validator\LessThan as LessThanValidator;
use Laminas\Validator\Regex as RegexValidator;
use Laminas\Validator\ValidatorInterface;

class Week extends DateTime
{
    /**
     * Seed attributes
     *
     * @var array
     */
    protected $attributes = [
        'type' => 'week',
    ];

    /**
     * Retrieves a Date Validator configured for a Week Input type
     *
     * @return ValidatorInterface
     */
    protected function getDateValidator()
    {
        return new RegexValidator('/^[0-9]{4}\-W[0-9]{2}$/');
    }

    /**
     * Retrieves a DateStep Validator configured for a Week Input type
     *
     * @return ValidatorInterface
     */
    protected function getStepValidator()
    {
        $stepValue = isset($this->attributes['step']) ? $this->attributes['step'] : 1; // Weeks

        $baseValue = isset($this->attributes['min']) ? $this->attributes['min'] : '1970-W01';

        return new DateStepValidator([
            'format'    => 'Y-\WW',
            'baseValue' => $baseValue,
            'step'      => new DateInterval("P{$stepValue}W"),
        ]);
    }

    /**
     * @see https://bugs.php.net/bug.php?id=74511
     * @return array
     */
    protected function getValidators()
    {
        if ($this->validators) {
            return $this->validators;
        }
        $validators = [];
        $validators[] = $this->getDateValidator();
        if (isset($this->attributes['min'])) {
            $validators[] = new GreaterThanValidator([
                'min'       => $this->attributes['min'],
                'inclusive' => true,
            ]);
        }
        if (isset($this->attributes['max'])) {
            $validators[] = new LessThanValidator([
                'max'       => $this->attributes['max'],
                'inclusive' => true,
            ]);
        }
        if (! isset($this->attributes['step'])
            || 'any' !== $this->attributes['step']
        ) {
            $validators[] = $this->getStepValidator();
        }
        $this->validators = $validators;
        return $this->validators;
    }
}
