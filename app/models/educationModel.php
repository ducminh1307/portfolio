<?php
     class educationModel extends DB {
        public function getEducations(){
            $sql = "SELECT * FROM education";
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

        public function updateEducation($id, $name, $major, $time, $mark, $des){
            $sql = "UPDATE `education` SET `name`='$name',`major`='$major',`time`='$time',`mark`='$mark',`description`='$des' WHERE `id`= $id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function addEducation($name, $major, $time, $mark, $des){
            $sql = "INSERT INTO `education`(`name`, `major`, `time`, `mark`, `description`) VALUES ('$name','$major','$time','$mark','$des')";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function deleteEducation($id){
            $sql = "DELETE FROM `education` WHERE `id`=$id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }
     }
?>