<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);


if ($_SERVER['DOCUMENT_ROOT'] == $_SERVER['DOCUMENT_ROOT']){
    define('APP_URI', '');
    define('APP_URI_PUBLIC', '/public');
    define('APP_URI_TEMPLATES', '/views');
    
    define('APP_URI_TEMPLATES_ADMIN', './views/admin');
    define('APP_URI_ADMIN', '/admin');

    define('APP_URI_TEMPLATES_PAINEL', 'painel');
    define('APP_URI_PAINEL', '/painel');

} else {

    define('APP_URI', 'http://forms.sbacvsp.com.br');
    define('APP_URI_PUBLIC', 'http://forms.sbacvsp.com.br/public');
    define('APP_URI_TEMPLATES', 'http://forms.sbacvsp.com.br/views');
    
    define('APP_URI_TEMPLATES_ADMIN', 'http://forms.sbacvsp.com.br/views/admin');
    define('APP_URI_ADMIN', 'http://forms.sbacvsp.com.br/admin');

    define('APP_URI_TEMPLATES_PAINEL', 'http://forms.sbacvsp.com.br/views/painel');
    define('APP_URI_PAINEL', 'http://forms.sbacvsp.com.br/painel');

}