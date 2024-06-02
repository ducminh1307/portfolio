<?php
     class contactModel extends DB {
        public function getContact(){
            $sql = "SELECT * FROM contact";
            $rs = mysqli_query($this->conn, $sql);
            if(mysqli_num_rows($rs)>0) {
                while($row = mysqli_fetch_array($rs)){
                    $data[] = $row;
                }
            } else {
                $data = false;
            }
            return $data;
        }

        public function updateContact($id, $name, $icon, $link){
            $sql = "UPDATE `contact` SET `name`='$name', `icon` = '$icon', `link`='$link' WHERE `id`= $id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function addContact($name, $icon, $link){
            $sql = "INSERT INTO `contact`(`name`, `icon`, `link`) VALUES ('$name', '$icon', '$link')";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function deleteContact($id){
            $sql = "DELETE FROM `contact` WHERE `id`=$id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }
     }
?>