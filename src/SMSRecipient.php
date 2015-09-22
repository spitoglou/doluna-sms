<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/9/2015
 * Time: 12:29 πμ
 */

namespace Spitoglou\SMS;


use Exception;
use InvalidArgumentException;

class SMSRecipient
{
    protected $number;

    public function __construct($number = '')
    {
        $this->number = $number;
        $this->validateNumber();
    }

    /**
     * @throws \InvalidArgumentException
     */
    protected function validateNumber()
    {
        if (strlen($this->number) !== 12) {
            throw new InvalidArgumentException('The number provided is not exactly 12 chars long');
        }
    }

    public function __toString()
    {
        return $this->number;
    }
}