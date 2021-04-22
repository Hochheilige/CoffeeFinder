<?php

namespace core\exception;

use Exception;

class NotFoundException extends Exception {
    protected $message = "This page is not found";
    protected $code = 404;
}

?>