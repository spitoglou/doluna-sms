<?php

namespace Spitoglou\SMS;

use InvalidArgumentException;

/**
 * Class SMSRecipient
 *
 * The recipient's Value Object
 * @package Spitoglou\SMS
 */
class SMSRecipient
{
    protected $number;

    /**
     * SMSRecipient constructor.
     *
     * Gets the recipient's phone number and validates
     * @param string $number
     */
    public function __construct($number = '')
    {
        $this->number = $number;
        $this->validateNumber();
    }

    /**
     * Validates that the recipient's phone number is 12 digits long (as required by the service)
     *
     * @throws \InvalidArgumentException
     */
    protected function validateNumber()
    {
        if (strlen($this->number) !== 12) {
            throw new InvalidArgumentException('The number provided is not exactly 12 chars long');
        }
    }

    /**
     * __toString
     * @return string
     */
    public function __toString()
    {
        return $this->number;
    }
}