<?php

namespace BsiOrg\PrimeTrust\Exceptions;

use Exception;

class TimeoutException extends Exception
{
    public $output;

    public function __construct(array $output = null)
    {
        parent::__construct('Script timed out while waiting for the process to complete.');

        $this->output = $output;
    }
    
    public function output()
    {
        return $this->output;
    }
}
