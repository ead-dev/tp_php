<?php

    function init(){
        try{
            $conn = new PDO('mysql:host=localhost;dbname=tds4_db;charset=utf8', 'root', '');
            return $conn;
        }
        catch(Exception $ex){
            echo "Erreur de connexion : ".$ex->getMessage();
        }
    }

    function getAgents(){
        $mc = init();
        $req = $mc->prepare('select * from agents');
        $req->execute();
        $agents = $req->fetchAll();
        return $agents;    
    }

    function deleteAgent($id){
        $mc = init();
        $string = 'DELETE FROM agents where id = :id';
        $req = $mc->prepare($string);
        $req->execute([
            'id'=>$id,
        ]);
        header('Location:/sindika/apropos.php');
    }

    function createAgent($nom,$salaire){
        $mc = init();
        $req = $mc->prepare('INSERT INTO agents (nom,salaire) values (:n,:s)');
        $req->execute([
            's'=>$salaire,
            'n'=>$nom,
        ]);
        header('Location:/sindika/apropos.php');
    }

    function updateAgent($id,$nom,$salaire){
        $mc = init();
        $req = $mc->prepare('UPDATE agents set salaire = :s, nom =:n where id = :mat');
        $req->execute([
            's'=>$salaire,
            'mat'=>$id,
            'n'=>$nom,
        ]);
        header('Location:/sindika/apropos.php');
    }

    function findAgent($id){
        $mc = init();
        $req = $mc->prepare('SELECT * FROM AGENTS WHERE id = :id');
        $req->execute([
            'id'=>$id,
        ]);
        $agent = $req->fetch();
        return $agent;
    }
    
?>