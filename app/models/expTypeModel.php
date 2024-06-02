<?php
     class expTypeModel extends DB {
        public function getExpType(){
            $sql = "SELECT * FROM exp_type";
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

        public function updateExpType($id, $name, $des){
            $sql = "UPDATE `exp_type` SET `name`='$name',`description`='$des' WHERE `id`= $id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function addExpType($name, $des){
            $sql = "INSERT INTO `exp_type`(`name`, `description`) VALUES ('$name','$des')";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function deleteExpType($id){
            $sql = "DELETE FROM `exp_type` WHERE `id`=$id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }
     }
?>