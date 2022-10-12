<?php
//ничего не меняем в этом файле
require("application/Application.php");

function router($params) {
    $method = $params['method'];
    if ($method) {
        $app = new Application();
        switch ($method) {
            //аутентификация
            case 'login': return $app->login($params);
            case 'logout': return $app->logout($params);
            case 'registration': return $app->registration($params);
            //чат
            case 'sendMessange': return $app->sendMessange($params);
            case 'getMessanges': return $app->getMessanges($params);
            //игра
            case 'getMap': return $app->getMap($params);
            case 'getCastle': return $app->getCastle($params);
            case 'getScene': return $app->getScene($params);
            case 'command': return $app->command($params);
        }
    }
    return false;
}

function answer($data) {
    if ($data) {
        return array(
            'result' => 'ok',
            'data' => $data
        );
    }
    return array(
        'result' => 'error'
    );
}

echo(json_encode(answer(router($_GET))));
