<?php
// connection � la base de donn�es


            
    function getAllSejours() {
        $bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
        
        $sejours = $bdd->query('select * from sejour order by sejno');
        
        return $sejours;
    }
?>