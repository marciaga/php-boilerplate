<?php

namespace Arciaga\Controllers;

use Http\Request;
use Http\Response;
use Arciaga\Template\Renderer;

class Homepage
{
    private $request;
    private $response;
    private $renderer;

    public function __construct(Request $request, Response $response, Renderer $renderer)
    {
        $this->request = $request;
        $this->response = $response;
        $this->renderer = $renderer;
    }

    public function show()
    {
        $html = $this->renderer->render('layout', [
            'someData' => 'I am a human.'
        ]);

        $this->response->setContent($html);
        $this->response->getContent();
    }


    private function sendJsonResponse($res)
    {
        $this->response->setContent(json_encode($res));
        $this->response->getContent();
    }

    public static function apiCall($params)
    {
        /**
         * Rebuild this function to have a wrapper around php curl
         */

        $data = http_build_query($params); // query string
        $url = 'http://someapiyouwant.com';

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        if ($curl_response === false) {
            $info = curl_getinfo($curl);
            curl_close($curl);
            return ['message' => 'Something went wrong. Please try again later'];
        }
        curl_close($curl);

        $decoded = json_decode($curl_response, true);

        return $decoded;
    }
}
