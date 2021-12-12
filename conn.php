<?php
class Dbh {
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect()
    {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'testt';

        $conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);

        return $conn;
    }

}

class User extends Dbh {
    protected function getAllUsers()
    {
        $sql = 'select * from user';
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows>0){
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data; // return data
        }
    }
}

class Show extends User {
    public function showAllUsers(){
        $datas = $this->getAllUsers();
        foreach($datas as $$data){
            echo $data['uid'].'<br>';
            echo $data['pwd'].'<br>';
        }
    } 
}
$users = new Show();
$users->showAllUsers();
?>