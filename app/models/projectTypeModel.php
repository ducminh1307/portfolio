<?php
     class projectTypeModel extends DB {
        public function getProjectTypes(){
            $sql = "SELECT * FROM `project_type`";
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

        public function updateProjectType($id, $name, $description){
            $sql = "UPDATE `project_type` SET `name`='$name', `description` = '$description' WHERE `id`= $id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function addProjectType($name, $description){
            $sql = "INSERT INTO `project_type`(`name`, `description`) VALUES ('$name', '$description')";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function deleteProjectType($id){
            $sql = "DELETE FROM `project_type` WHERE `id`=$id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }
     }
?>