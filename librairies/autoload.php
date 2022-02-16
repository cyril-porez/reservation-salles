<?php 
    spl_autoload_register(function($className) {
    
        /**
         * $className  = nomduNamespace\nomdufichier.php
         * require = ../nomduNamespace/nomdufichier.php
         * str_replace remplace toute les occurence dans une chaîne.
         */
        $className = str_replace("\\", "/", $className);
        
        require_once("../$className.php");
    
    }); 
?>