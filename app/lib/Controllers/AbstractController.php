<?php

namespace App\Controllers;

use App\Http\Response;
use App\Http\Request;

abstract class AbstractController {
    protected function validateContentType(Request $request): bool {
        $headers = $request->getHeaders();
        return isset($headers['Content-Type']) && $headers['Content-Type'] === 'application/json';
    }

    public abstract function process(Request $request): Response;
}