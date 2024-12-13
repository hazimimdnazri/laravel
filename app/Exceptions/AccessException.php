<?php

namespace App\Exceptions;

use Exception;

class AccessException extends Exception
{
    public function render($request)
    {
        $exception = $this;
        return response()->view('errors.403', compact('exception'), 403);
    }
}
