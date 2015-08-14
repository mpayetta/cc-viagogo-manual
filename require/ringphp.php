<?php

require_once __DIR__ . '/vendor/ringphp/src/Core.php';

require_once __DIR__ . '/vendor/ringphp/src/Future/FutureInterface.php';
require_once __DIR__ . '/vendor/ringphp/src/Future/BaseFutureTrait.php';
require_once __DIR__ . '/vendor/ringphp/src/Future/MagicFutureTrait.php';
require_once __DIR__ . '/vendor/ringphp/src/Future/CompletedFutureValue.php';
require_once __DIR__ . '/vendor/ringphp/src/Future/FutureArrayInterface.php';
require_once __DIR__ . '/vendor/ringphp/src/Future/CompletedFutureArray.php';

require_once __DIR__ . '/vendor/ringphp/src/Client/StreamHandler.php';
require_once __DIR__ . '/vendor/ringphp/src/Client/Middleware.php';
require_once __DIR__ . '/vendor/ringphp/src/Client/CurlMultiHandler.php';
require_once __DIR__ . '/vendor/ringphp/src/Client/CurlFactory.php';
require_once __DIR__ . '/vendor/ringphp/src/Client/CurlHandler.php';
require_once __DIR__ . '/vendor/ringphp/src/Client/ClientUtils.php';

?>