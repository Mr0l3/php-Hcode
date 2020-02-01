<?php

class User{
    private $idUser;
    private $loginUser;
    private $passUser;
    private $dtUser;


    public function getIdUser(){
        return $this->idUser;
    }


    public function setIdUser(int $id){
        $this->idUser = (int)$id;
    }


    public function getLoginUser(): string{
        return $this->loginUser;
    }


    public function setLoginUser(string $login){
        $this->loginUser = $login;
    }


    public function getPassUser(): string{
        return $this->passUser;
    }
    

    public function setPassUser(string $passw){
        $this->passUser = $passw;
    }


    public function getDtUser(): object{
        return $this->dtUser;
    }
    

    public function setDtUser(string $dt){
        $this->dtUser = new DateTime($dt);
    }


    public function setData(array $data){
        $data = $data[0];
        $this->setIdUser($data['idusuario']);
        $this->setLoginUser($data['deslogin']);
        $this->setPassUser($data['dessenha']);
        $this->setDtUser($data['dtcadastro']);
    }


    public function loadById(string $table, int $id){
        $conn = new Sql();
        $results = $conn->select('*', $table, "idusuario = :ID", '', array(':ID'=>$id));

        if(count($results) > 0){
            $this->setData($results);
        }
    }


    public function loadByLogin(string $table, string $login, string $pass){
        $conn = new Sql();
        $result = $conn->select('*', $table, 'deslogin = :LOGIN AND dessenha = :PASS', '', array(':LOGIN'=>$login, ':PASS'=>$pass));
        
        if(is_countable($result) > 0){
            $this->setData($result);
        }else{
            throw new Exception("Usuário e/ou senha inválidos");    
        }
    }
    
    
    public static function search(string $search, string $table, string $column, string $order = ''){
        $conn = new Sql();
        if(!empty(trim($order))){
            $result = $conn->query("SELECT * FROM $table WHERE $column LIKE :SEARCH ORDER BY $order", array(
                ':SEARCH'=>'%'. $search .'%'
            ));
        }else{
            $result = $conn->query("SELECT * FROM $table WHERE $column LIKE :SEARCH", array(
                ':SEARCH'=>'%'. $search .'%'
            ));
        }

        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($result)){
            return $result;
        }else{
            return false;
        } 
    }


    public static function allOrdSelect(string $table, string $ordByWhat): string{
        $db = new Sql();
        $results = $db->select('*', $table, '', $ordByWhat);
        return json_encode($results);
    }


    public function insertUser(){
        $db = new Sql();
        $result = $db->query('CALL sp_usuarios_insert(:LOGIN, :PASS)', array(
            ':LOGIN'=>$this->getLoginUser(),
            ':PASS'=>$this->getPassUser()
        ));

        if(!empty($result) && !false){
            $this->setData($result->fetchAll(PDO::FETCH_ASSOC));
        }else{
            throw new Exception("Não foi possível inserir usuário");
        }
    }


    public function updateUser(string $table, string $login = '', string $passw = ''){
        $db = new Sql();
               
        if(!empty(trim($login)) && !empty(trim($passw))){
            $db->query("UPDATE $table SET deslogin = :LOGIN, dessenha = :PASS WHERE idusuario = :ID", array(':LOGIN'=>$login, ':PASS'=>$passw, ':ID'=>$this->getIdUser()));   
            $this->setLoginUser($login);
            $this->setPassUser($passw);
        }else{
            if(empty(trim($login)) && !empty(trim($passw))){
                $db->query("UPDATE $table SET dessenha = :PASS WHERE idusuario = :ID", array(':PASS'=>$passw, ':ID'=>$this->getIdUser()));
                $this->setPassUser($passw);
            }else if(!empty(trim($login)) && empty(trim($passw))){
                $db->query("UPDATE $table SET deslogin = :LOGIN WHERE idusuario = :ID", array(':LOGIN'=>$login, ':ID'=>$this->getIdUser()));
                $this->setLoginUser($login);
            }else{
                throw new Exception("Nenhum argumento possui valor válido");
            }
        }
    }


    public function deleteUser($table){
        $db = new Sql();
        $db->query("DELETE FROM $table WHERE idusuario = :ID", array(':ID'=>$this->getIdUser()));
        $this->setData(array(
            array(
                'idusuario'=>0,
                'deslogin'=>'',
                'dessenha'=>'',
                'dtcadastro'=>'now'
            )
        ));
    }


    public function __toString(): string{
        return json_encode(array(
            'idusuario'=>$this->getIdUser(),
            'deslogin'=>$this->getLoginUser(),
            'dessenha'=>$this->getPassUser(),
            'dtcadastro'=>$this->getDtUser()->format('d/m/Y H:i:s')
        ));
    }


    public function __construct(string $login = '', string $pass = ''){
        $this->setLoginUser($login);
        $this->setPassUser($pass);
    }
}
