<?php

namespace Bigcommerce\Api;

/**
 * Base class for API exceptions. Used if failOnError is true.
 */
class Error extends \Exception
{
    public function __construct($message, $code)
    {
        if (is_array($message)) {
            $message = $message[0]->message;
        }
        else if (is_object($message)) {
            $message = isset($message->error) ? $message->error : var_export($message, true);
        }

        parent::__construct($message, $code);
    }
}
