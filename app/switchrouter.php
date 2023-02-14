<?php
class SwitchRouter
{
    private function stripParameters($uri)
    {
        if (str_contains($uri, '?')) {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }
        return $uri;
    }

    public function route($uri)
    {
        $uri = $this->stripParameters($uri);

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
            case 'reviews':
                require __DIR__ . '/controller/reviewscontroller.php';
                $controller = new ReviewsController();
                $controller->index();
                break;
            default:
                http_response_code(404);
                break;
        }
    }
}
