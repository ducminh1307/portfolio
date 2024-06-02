<?php
     class skillTypeModel extends DB {
        public function getSkillTypes(){
            $sql = "SELECT * FROM `skill_type`";
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

        public function updateSkillType($id, $name, $description){
            $sql = "UPDATE `skill_type` SET `name`='$name', `description` = '$description' WHERE `id`= $id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function addSkillType($name, $description){
            $sql = "INSERT INTO `skill_type`(`name`, `description`) VALUES ('$name', '$description')";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function deleteSkillType($id){
            $sql = "DELETE FROM `skill_type` WHERE `id`=$id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }
     }
?>