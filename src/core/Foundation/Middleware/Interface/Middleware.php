<?php

namespace Devamirul\PhpMicro\core\Foundation\Middleware\Interface;

use Devamirul\PhpMicro\core\Foundation\Application\Request\Request;

interface Middleware {
    public function handle(Request $request, array $guards);
}
