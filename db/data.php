<?php
    $filieres = [
        ["codeF" => 'SMI',"intituleF" => 'Sciences Mathematiques et Informatique'],
        ["codeF" => 'SMP',"intituleF" => 'Sciences Mathematiques et Physique'],
        ["codeF" => 'SVI',"intituleF" => 'Sciences de la Vie'],
        ["codeF" => 'BCG',"intituleF" => 'Biologie Chimie Geologie']
    ];
    $etudiantsFromDb = [
        [
            "code" => "ETU5",
            "commentaire" => "Good performance in all semesters.",
            "nom" => "Frank",
            "prenom" => "Ivy",
            "note" => 16,
            "filliere" => "SMP",
            "password" => "8GvFv34z",
            "sexe" => "femme",
            "semestres" => [
                "S4",
                "S1",
                "S2",
                "S6",
                "S5",
                "S3"
            ]
        ],
        [
            "code" => "ETU6",
            "commentaire" => "Good performance in all semesters.",
            "nom" => "Frank",
            "prenom" => "Frank",
            "note" => 10,
            "filliere" => "SMI",
            "password" => "pWMBJSJp",
            "sexe" => "homme",
            "semestres" => []
        ],
        [
            "code" => "ETU7",
            "commentaire" => "Good performance in all semesters.",
            "nom" => "Eve",
            "prenom" => "David",
            "note" => 13,
            "filliere" => "SVI",
            "password" => "IyaZF6YR",
            "sexe" => "homme",
            "semestres" => [
                "S1",
                "S4",
                "S6",
                "S2"
            ]
        ],
        [
            "code" => "ETU8",
            "commentaire" => "Good performance in all semesters.",
            "nom" => "Henry",
            "prenom" => "David",
            "note" => 17,
            "filliere" => "SMI",
            "password" => "JNnh5Yag",
            "sexe" => "femme",
            "semestres" => [
                "S5" , "S4", "S1"
            ]
        ],
        [
            "code" => "ETU9",
            "commentaire" => "Good performance in all semesters.",
            "nom" => "Grace",
            "prenom" => "Henry",
            "note" => 9,
            "filliere" => "SVI",
            "password" => "eLNqbTrW",
            "sexe" => "homme",
            "semestres" => [
                "S6"
            ]
        ],
        [
            "code" => "ETU10",
            "commentaire" => "Good performance in all semesters.",
            "nom" => "Charlie",
            "prenom" => "Ivy",
            "note" => 12,
            "filliere" => "BCG",
            "password" => "3uUwbbJ8",
            "sexe" => "femme",
            "semestres" => [
                "S6",
                "S2",
                "S3"
            ]
        ],
        [
            "code" => "ETU11",
            "commentaire" => "Good performance in all semesters.",
            "nom" => "Frank",
            "prenom" => "Grace",
            "note" => 20,
            "filliere" => "SMP",
            "password" => "Yc1tMjui",
            "sexe" => "femme",
            "semestres" => [
                "S3",
                "S6",
                "S4",
                "S2",
                "S1"
            ]
        ],
        [
            "code" => "ETU12",
            "commentaire" => "Good performance in all semesters.",
            "nom" => "Eve",
            "prenom" => "Eve",
            "note" => 0,
            "filliere" => "SVI",
            "password" => "CDx0R6SK",
            "sexe" => "femme",
            "semestres" => []
        ],
        [
            "code" => "ETU13",
            "commentaire" => "Good performance in all semesters.",
            "nom" => "Eve",
            "prenom" => "Ivy",
            "note" => 7,
            "filliere" => "BCG",
            "password" => "cmlHwj6u",
            "sexe" => "homme",
            "semestres" => [
                "S4",
                "S5",
                "S1",
                "S6"
            ]
        ],
        [
            "code" => "ETU14",
            "commentaire" => "Good performance in all semesters.",
            "nom" => "Bob",
            "prenom" => "Ivy",
            "note" => 3,
            "filliere" => "BCG",
            "password" => "SiKoZ5Rf",
            "sexe" => "homme",
            "semestres" => [
                "S4",
                "S1",
                "S5",
                "S3",
                "S6",
                "S2"
            ]
        ]
    ];
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
?>