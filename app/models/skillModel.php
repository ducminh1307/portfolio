<?php
     class skillModel extends DB {
        public function getSkills(){
            $sql = "SELECT s.id, s.name, s.icon, st.name AS skill_type FROM skill s JOIN skill_type st ON s.skill_type_id = st.id";
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

        public function updateSkill($id, $name, $icon, $type){
            $sql = "UPDATE `skill` SET `name`='$name', `icon` = '$icon', `skill_type_id` = '$type' WHERE `id`= $id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function updateSkill1($id, $name, $icon){
            $sql = "UPDATE `skill` SET `name`='$name', `icon` = '$icon' WHERE `id`= $id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function addSkill($id_type, $name, $icon){
            $sql = "INSERT INTO `skill`( `skill_type_id`, `name`, `icon`) VALUES ('$id_type','$name','$icon')";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function deleteSkill($id){
            $sql = "DELETE FROM `skill` WHERE `id` = $id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }
     }
?>