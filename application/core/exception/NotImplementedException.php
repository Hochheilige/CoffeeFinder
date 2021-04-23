<?php

namespace core\exception;

use Exception;

class NotImplementedException extends Exception {
    protected $message = "Page is not implemented yet.\nComing soon...";
    protected $code = 425;
}

?>