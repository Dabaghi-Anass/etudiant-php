<?php
    $etudiantsFromDb = [
            ['nom' => 'Smith', 'prenom' => 'John', 'note' => 20, 'filliere' => 'SMI', 'codeE' => 'ABCD123'],
            ['nom' => 'Johnson', 'prenom' => 'Robert', 'note' => 12, 'filliere' => 'SMI', 'codeE' => 'EFGH456'],
            ['nom' => 'Williams', 'prenom' => 'Michael', 'note' => 10, 'filliere' => 'SMP', 'codeE' => 'IJKL789'],
            ['nom' => 'Doe', 'prenom' => 'Jane', 'note' => 19, 'filliere' => 'SMI', 'codeE' => 'MNOP123'],
            ['nom' => 'Brown', 'prenom' => 'David', 'note' => 18, 'filliere' => 'SVI', 'codeE' => 'QRST456'],
            ['nom' => 'Jones', 'prenom' => 'Jennifer', 'note' => 16, 'filliere' => 'SMI', 'codeE' => 'UVWX789'],
            ['nom' => 'Miller', 'prenom' => 'William', 'note' => 14, 'filliere' => 'SMI', 'codeE' => 'YZAB123'],
            ['nom' => 'Davis', 'prenom' => 'Linda', 'note' => 11, 'filliere' => 'SMP', 'codeE' => 'CDEF456'],
            ['nom' => 'Garcia', 'prenom' => 'Maria', 'note' => 9, 'filliere' => 'SMP', 'codeE' => 'GHIJ789'],
            ['nom' => 'Martinez', 'prenom' => 'Daniel', 'note' => 10, 'filliere' => 'SMI', 'codeE' => 'KLMN123'],
            ['nom' => 'Smith', 'prenom' => 'John', 'note' => 10, 'filliere' => 'SMI', 'codeE' => 'OPQR456'],
            ['nom' => 'Anderson', 'prenom' => 'James', 'note' => 17, 'filliere' => 'SVI', 'codeE' => 'STUV789'],
            ['nom' => 'Taylor', 'prenom' => 'Elizabeth', 'note' => 19, 'filliere' => 'SVI', 'codeE' => 'WXYZ123'],
            ['nom' => 'Thomas', 'prenom' => 'Christopher', 'note' => 20, 'filliere' => 'BCG', 'codeE' => 'ABCD456'],
            ['nom' => 'Harris', 'prenom' => 'Jessica', 'note' => 8, 'filliere' => 'SMP', 'codeE' => 'EFGH789'],
            ['nom' => 'Clark', 'prenom' => 'Sarah', 'note' => 7, 'filliere' => 'SMP', 'codeE' => 'IJKL123'],
            ['nom' => 'Lewis', 'prenom' => 'Matthew', 'note' => 0, 'filliere' => 'SMP', 'codeE' => 'MNOP456'],
            ['nom' => 'Anass', 'prenom' => 'Dabaghi', 'note' => 2, 'filliere' => 'SMI', 'codeE' => 'QRST789']
        ];
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
    function getEtudiantByCode($codeE){
        global $etudiantsFromDb;
        foreach($etudiantsFromDb as $e){
            if($e['codeE'] === $codeE){
                return $e;
            }
        }
        return null;
    }
?>