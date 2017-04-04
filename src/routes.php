<?php
// Routes

##############################################################################################
//Site
##############################################################################################
    $app->get('/', function ($request, $response, $args) {
        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        // Render index view
        return $this->renderer->render($response, 'index.phtml');
    });


    $app->get('/obrigado', function ($request, $response, $args) {
        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        // Render index view
        return $this->renderer->render($response, 'obrigado.phtml');
    });


    ##############################################################################################
    //save respostas
    ##############################################################################################
    $app->post('/save-quest1', function ($request, $response, $args) {

        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        $quest = new Questionario($this->db);
        $lista = $quest->Salva1($_POST);

        // Render index view
        return $response->withRedirect('save-quest2');
    });

    $app->get('/save-quest2', function ($request, $response, $args) {

        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        // Render index view
        return $this->renderer->render($response, 'pag2.phtml');
    });
        $app->post('/save-quest2', function ($request, $response, $args) {

            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            $quest = new Questionario($this->db);
            $lista = $quest->Salva2($_POST);

            // Render index view
            return $response->withRedirect('save-quest3');
        });

    $app->get('/save-quest3', function ($request, $response, $args) {

        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        // Render index view
        return $this->renderer->render($response, 'pag3.phtml');
    });
        $app->post('/save-quest3', function ($request, $response, $args) {

            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            $quest = new Questionario($this->db);
            $lista = $quest->Salva3($_POST);

            // Render index view
            return $response->withRedirect('save-quest4');
        });

    $app->get('/save-quest4', function ($request, $response, $args) {

        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        // Render index view
        return $this->renderer->render($response, 'pag4.phtml');
    });
        $app->post('/save-quest4', function ($request, $response, $args) {

            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            $quest = new Questionario($this->db);
            $lista = $quest->Salva4($_POST);

            // Render index view
            return $response->withRedirect('save-quest5');
        });

    $app->get('/save-quest5', function ($request, $response, $args) {

        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        // Render index view
        return $this->renderer->render($response, 'pag5.phtml');
    });
        $app->post('/save-quest5', function ($request, $response, $args) {

            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            $quest = new Questionario($this->db);
            $lista = $quest->Salva5($_POST);

            // Render index view
            return $response->withRedirect('save-quest6');
        });

    $app->get('/save-quest6', function ($request, $response, $args) {

        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        // Render index view
        return $this->renderer->render($response, 'pag6.phtml');
    });
        $app->post('/save-quest6', function ($request, $response, $args) {

            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            $quest = new Questionario($this->db);
            $lista = $quest->Salva6($_POST);

            // Render index view
            return $response->withRedirect('save-quest7');
        });

    $app->get('/save-quest7', function ($request, $response, $args) {

        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        // Render index view
        return $this->renderer->render($response, 'pag7.phtml');
    });
        $app->post('/save-quest7', function ($request, $response, $args) {

            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            $quest = new Questionario($this->db);
            $lista = $quest->Salva7($_POST);

            // Render index view
            return $response->withRedirect('obrigado');
        });


##############################################################################################
//Admin
##############################################################################################
    $app->get('/admin', function ($request, $response, $args) {
        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        // Render index view
        return $this->renderer->render($response, 'admin/index.phtml');
    });   

        $app->post('/admin/login', function ($request, $response, $args) {
            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            $admin = new Admin($this->db);
            $retorno = $admin->Login($_POST);

            // Render index view
            if(count($retorno) > 1){
                $_SESSION['login'] = $_POST['usuario_login'];
                return $response->withRedirect(APP_URI_ADMIN.'/abertura');
            }
            else {
                $msg = "Usuário não encontrado";
                $alerta = "alert alert-danger";
                return $this->renderer->render($response, 'admin/index.phtml', array('msg' => $msg, 'alerta' => $alerta));
            }

        });  

    ##############################################################################################
    //ABERTURA
    ##############################################################################################
    $app->get('/admin/abertura', function ($request, $response, $args) {

        if(!$_SESSION['login']){
            return $response->withRedirect(APP_URI_ADMIN);
        }

        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        $admin = new Admin($this->db);
        $lista = $admin->ListaUsuarios();

        // Render index view
        return $this->renderer->render($response, 'admin/abertura.phtml', array('lista' => $lista));
    });


    ##############################################################################################
    //Respostas
    ##############################################################################################
    $app->get('/admin/respostas/lista', function ($request, $response, $args) {

        if(!$_SESSION['login']){
            return $response->withRedirect(APP_URI_ADMIN);
        }

        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        $resp = new Respostas($this->db);
        $lista = $resp->ListaPessoas();

        // Render index view
        return $this->renderer->render($response, 'admin/respostas/lista.phtml', array('lista' => $lista));
    });


        ##############################################################################################
        //Compila resposta
        ##############################################################################################
        $app->post('/admin/respostas/exportar', function ($request, $response, $args) {

            if(!$_SESSION['login']){
                return $response->withRedirect(APP_URI_ADMIN);
            }

            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            $resp = new Respostas($this->db);
            $csv = $resp->ExportaPessoas($_POST);

            // Render index view
            return $this->renderer->render($response, 'admin/respostas/gera_csv.phtml', array('csv' => $csv));
        });


    ##############################################################################################
    //USUARIO
    ##############################################################################################
        //index e lista de usuarios ja cadastrados
        $app->get('/admin/usuarios', function ($request, $response, $args) {

            if(!$_SESSION['login']){
                return $response->withRedirect(APP_URI_ADMIN);
            }

            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            $admin = new Admin($this->db);
            $lista = $admin->ListaUsuarios();

            // Render index view
            return $this->renderer->render($response, 'admin/usuario/index.phtml', array('lista' => $lista));
        });

        //pagina de cadastro de novo usuario
        $app->get('/admin/usuario/novo', function ($request, $response, $args) {

            if(!$_SESSION['login']){
                return $response->withRedirect(APP_URI_ADMIN);
            }

            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            $flag = 'novo';

            // Render index view
            return $this->renderer->render($response, 'admin/usuario/cadastrar.phtml', array('flag' => $flag));
        });

            //salva dados de novo usuario
            $app->post('/admin/usuario/novo', function ($request, $response, $args) {
                // Sample log message
                $this->logger->info("Slim-Skeleton '/' route");

                $admin = new Admin($this->db);
                $retorno = $admin->SalvaUsuario($_POST);

                // Render index view
                return $response->withRedirect(APP_URI_ADMIN.'/abertura');
            });

        //pagina de edição de usuario
        $app->get('/admin/usuario/editar/{id}', function ($request, $response, $args) {

            if(!$_SESSION['login']){
                return $response->withRedirect(APP_URI_ADMIN);
            }

            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            $flag = 'editar';
            $admin = new Admin($this->db);
            $dados = $admin->BuscaUsuario($args['id']);

            // Render index view
            return $this->renderer->render($response, 'admin/usuario/cadastrar.phtml', array('flag' => $flag, 'dados' => $dados));
        });

            //edita dados de usuario
            $app->post('/admin/usuario/editar', function ($request, $response, $args) {
                // Sample log message
                $this->logger->info("Slim-Skeleton '/' route");

                $admin = new Admin($this->db);
                $retorno = $admin->EditaUsuario($_POST);

                // Render index view
                return $response->withRedirect(APP_URI_ADMIN.'/abertura');
            });

            //edita senha de usuario
            $app->post('/admin/usuario/editasenha', function ($request, $response, $args) {
                // Sample log message
                $this->logger->info("Slim-Skeleton '/' route");

                $admin = new Admin($this->db);
                $retorno = $admin->EditaSenhaUsuario($_POST);

                // Render index view
                return $response->withRedirect(APP_URI_ADMIN.'/abertura');
            });

        //pagina de edição de usuario
        $app->get('/admin/usuario/delete/{id}', function ($request, $response, $args) {

            if(!$_SESSION['login']){
                return $response->withRedirect(APP_URI_ADMIN);
            }

            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            $admin = new Admin($this->db);
            $dados = $admin->DeleteUsuario($args['id']);

            // Render index view
            return $response->withRedirect(APP_URI_ADMIN.'/abertura');
        });


    ##############################################################################################
    //LOGOUT
    ##############################################################################################
        $app->get('/admin/sair', function ($request, $response, $args) {

            session_destroy();

            return $response->withRedirect(APP_URI_ADMIN);

        });





