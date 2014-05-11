<?php

    ini_set('display_errors', true);
    error_reporting(E_ALL);

    $confidencial = "wow such private very confidential";
    $language = "PHP";
    
    // Declarando una función
    function view($language)
    {
        require 'view.php';
    }
    
    // Llamando una función
    view($language);