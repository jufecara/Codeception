<?php
namespace Codeception\Exception;

class ElementNotFound extends TestRuntime
{

    public function __construct($selector, $message = null)
    {
        parent::__construct($message . " '$selector' was not found on page.");
    }

}
