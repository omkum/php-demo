<?php 
require 'startup.php'; // assuming this has an autoloader which includes controller.php
?>
<html><head></head>
<body>
<? include '_header.php' ?>

<? include '_nav.php' ?>

<?
class Login extends Controller {
    function __construct(){
        parent::__construct();

        if(!empty( $_POST )){
            if( $this->doLogin() ){
                // you can create a redirect method in Controller
                return $this->redirect('secret.php');
            }
        }

        $this->showLoginForm();
    }
    ...
}
?>
<? include '_footer.php' ?>
