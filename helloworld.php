<?php

    ini_set('display_errors', true);
    error_reporting(E_ALL);

    $confidencial = "wow such private very confidential";
    $language = "PHP";
    
    // Declarando una funcion
    function view($language)
    {
        require 'view.php';
    }
    
    // Llamando una funcion
    view($language);