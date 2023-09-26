<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;

class App
{
    private $view;

    public function __construct()
    {
        $this->view = new Engine(CONF_VIEW_APP,'php');
    }

    public function home () : void 
    {
        echo $this->view->render("home");

    }

    public function login (?array $data) : void 
    {
        if(!empty($data)){

            if(in_array("",$data)){
                $json = [
                    "message" => "Informe e-mail e senha para entrar!",
                    "type" => "warning"
                ];
                echo json_encode($json);
                return;
            }

            if(!is_email($data["email"])){
                $json = [
                    "message" => "Por favor, informe um e-mail válido!",
                    "type" => "warning"
                ];
                echo json_encode($json);
                return;
            }

            $user = new User();

            if(!$user->validate($data["email"],$data["password"])){
                $json = [
                    "message" => "Email e/ou Senha inválidos!",
                    "type" => "error"
                ];
                echo json_encode($json);
                return;
            }

            $json = [
                "name" => $user->getNickname(),
                "email" => $user->getEmail(),
                "type" => "success"
            ];
            echo json_encode($json);
            return;

        }

        echo $this->view->render("login");

    }

    public function register (?array $data) : void 
    {
        if(!empty($data)){

            if(in_array("",$data)){
                $json = [
                    "message" => "Informe nome, e-mail e senha para cadastrar!",
                    "type" => "warning"
                ];
                echo json_encode($json);
                return;
            }

            if(!is_email($data["email"])){
                $json = [
                    "message" => "Informe um e-mail válido!",
                    "type" => "warning"
                ];
                echo json_encode($json);
                return;
            }

            $user = new User(
                NULL,
                $data["nickname"],
                $data["email"],
                $data["password"]
            );

            if($user->findByEmail($data["email"])){
                $json = [
                    "message" => "Email já cadastrado!",
                    "type" => "error"
                ];
                echo json_encode($json);
                return;
            }

            if(!$user->insert()){
                $json = [
                    "message" => "Email não cadastrado!",
                    "type" => "error"
                ];
                echo json_encode($json);
                return;
            } else {
                $json = [
                    "nickname" => $data["nickname"],
                    "email" => $data["email"],
                    "message" => "Email cadastrado com sucesso!",
                    "type" => "success"
                ];
                echo json_encode($json);
                return;
            }

            return;
        }

        echo $this->view->render("register");

    }

    public function profile () : void 
    {
        echo $this->view->render("profile");

    }

}