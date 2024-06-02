<?php
     class expModel extends DB {
        public function getExps(){
            $sql = "SELECT e.id, e.name, e.description, e.role, e.year, et.name AS exp_type FROM exp e INNER JOIN exp_type et ON e.exp_type_id = et.id ORDER BY e.id DESC, e.year DESC";
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

        public function updateExp($id, $name, $exp_type, $year, $role, $des){
            $sql = "UPDATE `exp` SET `name`='$name', `exp_type_id` = '$exp_type', `year`= '$year', `role` = '$role', `description`='$des' WHERE `id`= $id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function updateExpNoneType($id, $name, $year, $role, $des){
            $sql = "UPDATE `exp` SET `name`='$name', `year`= '$year', `role` = '$role', `description`='$des' WHERE `id`= $id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function addExp($name, $exp_type, $year, $role, $des){
            $sql = "INSERT INTO `exp`(`name`, `exp_type_id`, `year`, `role`, `description`) VALUES ('$name', '$exp_type', '$year', '$role','$des')";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function deleteExp($id){
            $sql = "DELETE FROM `exp` WHERE `id`=$id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }
     }
?>