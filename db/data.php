<?php
    $filieres = [
        ["codeF" => 'SMI',"intituleF" => 'Sciences Mathematiques et Informatique'],
        ["codeF" => 'SMP',"intituleF" => 'Sciences Mathematiques et Physique'],
        ["codeF" => 'SVI',"intituleF" => 'Sciences de la Vie'],
        ["codeF" => 'BCG',"intituleF" => 'Biologie Chimie Geologie']
    ];
    $etudiantsFromDb = [];
    for ($i = 0; $i < 10; $i++) {
        $newStudent = [
            "code" => 'E' . ($i + 5),
            "nom" => generateRandomName(),
            "prenom" => generateRandomName(),
            "note" => rand(0, 20),
            "filliere" => generateRandomFilliere(),
            "password" => generateRandomPassword(),
            "sexe" => generateRandomSexe(),
            "semestres" => generateRandomSemestres()
        ];
        $etudiantsFromDb[] = $newStudent;
    }
    function generateRandomName()
    {
        $names = ["Alice", "Bob", "Charlie", "David", "Eve", "Frank", "Grace", "Henry", "Ivy", "Jack"];
        return $names[array_rand($names)];
    }

    function generateRandomFilliere()
    {
        $fillieres = ["SMI", "SMP", "SVI", "BCG"];
        return $fillieres[array_rand($fillieres)];
    }

    function generateRandomPassword()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $password = '';
        for ($i = 0; $i < 8; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $password;
    }

    function generateRandomSexe()
    {
        $sexes = ["homme", "femme"];
        return $sexes[array_rand($sexes)];
    }

    function generateRandomSemestres()
    {
        $semestres = ["S1", "S2", "S3" ,"S4" ,"S5" ,"S6"];
        shuffle($semestres);
        $semestreCount = rand(0, 6);
        $semestres = array_slice($semestres, 0, $semestreCount);
        return $semestres;
    }

    function getFilieres(){
        global $filieres;
        return $filieres;
    }
    function getEtudiantByCode($codeE){
        global $etudiantsFromDb;
        foreach($etudiantsFromDb as $e){
            if($e['code'] === $codeE){
                return $e;
            }
        }
        return null;
    }
    echo json_encode($etudiantsFromDb);
?>