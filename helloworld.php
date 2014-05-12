<?php

    require 'config.php';

    $confidencial = "wow such private very confidential";
    $language = "PHP";
    
    // Declarando una función
    function view($language)
    {
        require 'view.php';
    }
    
    // Llamando una función
    view($language);