<?php
    $filieres = [
        ["codeF" => 'SMI',"intituleF" => 'Sciences Mathematiques et Informatique'],
        ["codeF" => 'SMP',"intituleF" => 'Sciences Mathematiques et Physique'],
        ["codeF" => 'SVI',"intituleF" => 'Sciences de la Vie'],
        ["codeF" => 'BCG',"intituleF" => 'Biologie Chimie Geologie']
    ];
    function getFilieres(){
        global $filieres;
        return $filieres;
    }
?>