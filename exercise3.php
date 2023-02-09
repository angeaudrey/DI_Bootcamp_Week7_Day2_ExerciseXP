<?php

function myFunction($nbre) {
    try {
        // verifier si le nombre est un entier 
        if (is_int($nbre)) {
            echo "$nbre c'est un entier valide.";
        } else {
            throw new Exception("$nbre n'est pas un entier.", 1);
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    } finally {
        echo "Validation complete";
    }
}

myFunction(2.5);