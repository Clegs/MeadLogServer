<?php

class ServerController extends BaseController {
    public function getVersion() {
        return Response::json([
            'server' => '0.0.1',
            'api' => 1
        ]);
    }
}