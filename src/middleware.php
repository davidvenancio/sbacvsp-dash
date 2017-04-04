<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);


if ($_SERVER['HTTP_HOST'] == 'localhost'){
    define('APP_URI', 'http://localhost/sbacvsp-dash');
    define('APP_URI_PUBLIC', 'http://localhost/sbacvsp-dash/public');
    define('APP_URI_TEMPLATES', 'http://localhost/sbacvsp-dash/views');
    
    define('APP_URI_TEMPLATES_ADMIN', 'http://localhost/sbacvsp-dash/views/admin');
    define('APP_URI_ADMIN', 'http://localhost/sbacvsp-dash/admin');

    define('APP_URI_TEMPLATES_PAINEL', 'http://localhost/sbacvsp-dash/views/painel');
    define('APP_URI_PAINEL', 'http://localhost/sbacvsp-dash/painel');

} else {
    define('APP_URI', 'xxx');
    define('APP_URI_PUBLIC', 'xxx');
}