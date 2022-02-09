<?php 
    spl_autoload_register(function($className) {
        var_dump($className);
        /**
         * $className  = Namespace\nomdufichier.php
         * require = ../Namespace/nomdufichier.php
         * str_replace remplace toute les occurence dans une chaîne.
         */
        $className = str_replace("\\", "/", $className);
        
        require_once("../$className.php");
      
    }); 
?>