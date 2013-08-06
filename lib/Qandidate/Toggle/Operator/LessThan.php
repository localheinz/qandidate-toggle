<?php

namespace Qandidate\Toggle\Operator;

use Qandidate\Toggle\Operator;

class LessThan extends Operator
{
    private $value;

    /**
     * @param number $value Numeric value to compare with
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function appliesTo($argument)
    {
        return $argument < $this->value;
    }
}