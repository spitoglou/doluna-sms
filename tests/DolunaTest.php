<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/9/2015
 * Time: 12:42 πμ
 */
class DolunaTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function itLetsRightNumbersPass()
    {
        $number = new \Spitoglou\SMS\SMSRecipient('306973888331');
        $this->assertEquals('306973888331', $number);
    }

    /** @test */
    public function itThrowsAnExceptionIfNumberIsInvalid()
    {
        $this->setExpectedException('\InvalidArgumentException');
        new \Spitoglou\SMS\SMSRecipient('306973888');
    }

}