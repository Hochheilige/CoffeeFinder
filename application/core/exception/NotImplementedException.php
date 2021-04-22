<?php

namespace core\exception;

use Exception;

class NotImplementedException extends Exception {
    protected $message = "This page is not implemented yet. Coming soon";
    protected $code = 425;
}

?>