<?php
class SwitchRouter
{
    public function route($uri)
    {
        switch ($uri) {

            case '':
                require __DIR__ . '/controller/homecontroller.php';
                $controller = new HomeController();
                $controller->index();
                break;
            case 'home':
                require __DIR__ . '/controller/homecontroller.php';
                $controller = new HomeController();
                $controller->index();
                break;
            default:
                http_response_code(404);
                break;
        }
    }
}
