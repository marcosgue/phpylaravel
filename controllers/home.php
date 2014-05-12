<?php

    $confidencial = "wow such private very confidential";
    $language = "PHP";
    $titulo = "Mejorando.la";
    
    // Llamando una función
    view('home', ['language' => $language, 'titulo' => $titulo]);