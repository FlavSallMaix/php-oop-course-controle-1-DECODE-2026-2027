<?php

namespace App\Controllers;

use App\Http\Response;
use App\Http\Request;

class ContactController extends AbstractController {
    public function process(Request $request): Response {
        $response = new Response();

        if (!$this->validateContentType($request)) {
            $response->statusCode = 400;
            $response->content = json_encode(['error' => 'Content-Type must be application/json']);

            return $response;
        } else {
            $body = file_get_contents('php://input');
            $decodedBody = json_decode($body, true);

            $allowedProperties = ['email', 'subject', 'message'];
            $receivedProperties = is_array($decodedBody) ? array_keys($decodedBody) : [];
            sort($receivedProperties);
            sort($allowedProperties);

            if ($receivedProperties !== $allowedProperties) {
                $response->statusCode = 400;
                $response->content = json_encode(['error' => 'Invalid request body']);
                return $response;
            }

            $response->statusCode = 201;
            $response->content = json_encode(['status' => 'OK']);
            return $response;
        }
    }
}