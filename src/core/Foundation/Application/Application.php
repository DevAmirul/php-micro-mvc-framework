<?php

namespace Devamirul\PhpMicro\core\Foundation\Application;

use App\Providers\AppServiceProvider;
use Devamirul\PhpMicro\core\Foundation\Application\Container\AppContainer;
use Devamirul\PhpMicro\core\Foundation\Application\Container\BaseContainer\BaseContainer;
use Devamirul\PhpMicro\core\Foundation\Application\Facade\Facades\Router;
use Devamirul\PhpMicro\core\Foundation\Application\Traits\Singleton;

class Application extends BaseContainer {
    use Singleton;

    private function __construct() {
        $this->callServiceProviders();
    }

    public function run() {
        try {
            echo var_export(Router::resolve(), true);
        } catch (\Exception $error) {
            http_response_code($error->getCode());
            echo $error->getMessage();
        }
    }

    public function callServiceProviders() : void {
        $providers = config('app', 'providers');

        foreach ($providers as $class) {
            $provider = new $class();

            $provider->register();
            $provider->boot();
        }
    }
}
