<?php
require_once "DBConnection.php";

class RecadoDAO
{
    private $id;
    private $nome;
    private $cidade;
    private $recado;
    private $email;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getRecado()
    {
        return $this->recado;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCidade()
    {
        return json_decode($this->cidade);
    }

    public static function insert($nome,$cidade,$recado,$email)
    {

        $db = DBConnection::getDB();
        $cidade = json_encode($cidade);
        $sql = "INSERT INTO docker.recado
                (nome, cidade, recado, email)
                VALUES(?, ?, ?, ?);";

        $stmt = $db->prepare($sql);
        $stmt->bind_param('ssss',$nome,$cidade,$recado,$email);
        $stmt->execute();
        if (!$result = $stmt->get_result())
            return false;
        else
            return true;
    }

    public static function delete($id)
    {
        $db = DBConnection::getDB();
        $sql = "DELETE FROM docker.recado WHERE id=?;";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        if (!$result = $stmt->get_result()){
            return false;
        }else{
            return true;
        }
    }
    
    public static function getById($id)
    {
        $db = DBConnection::getDB();
        $sql = "SELECT id, nome, cidade, recado, email
        FROM docker.recado WHERE id=?;";
         $stmt = $db->prepare($sql);
         $stmt->bind_param('i',$id);
         $stmt->execute();
         if (!$result = $stmt->get_result()){
            return null;
        } else{
            return $result->fetch_object('RecadoDAO');
        }
    }

    public static function getAll()
    {
        $db = DBConnection::getDB();
        $sql = "SELECT id, nome, cidade, recado, email
        FROM docker.recado;";
        
        return $result = $db->query($sql);
    }
    
    public static function update($nome,$cidade,$recado,$email,$id)
    {
        $db = DBConnection::getDB();
        $cidade = json_encode($cidade);
        var_dump($nome,$cidade,$recado,$email,$id);
        $sql = "UPDATE docker.recado
        SET nome=?, cidade=?, recado=?, email=?
        WHERE id=?;";
         $stmt = $db->prepare($sql);
         $stmt->bind_param('ssssi',$nome,$cidade,$recado,$email,$id);
         $stmt->execute();
         if (!$result = $stmt->get_result()){
            return false;
        }else{
            return true;
        }
    }
}
