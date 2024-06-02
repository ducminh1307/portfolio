<?php
     class accountModel extends DB {
        public function checkUser($user){
            $sql = "SELECT * FROM account WHERE username = '$user'";
            $rs = mysqli_query($this->conn, $sql);
            $data = mysqli_fetch_array($rs);
            if(!empty($data)) {
                return true;
            }
            return false;
        }
        public function getUser($user, $pass){
            $sql = "SELECT * FROM account WHERE username = '$user' AND pass = '$pass'";
            $rs = mysqli_query($this->conn, $sql);
            $data = mysqli_fetch_array($rs);
            if(!empty($data)) {
                return $data;
            }
            return false;
        }
     }
?>