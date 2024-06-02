<?php
     class workModel extends DB {
        public function getWorks(){
            $sql = "SELECT * FROM work";
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

        public function updateWork($id, $name, $icon_feather, $description){
            $sql = "UPDATE `work` SET `name`='$name',`icon_feather`='$icon_feather', `description` = '$description' WHERE `id`= $id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function addWork($name, $icon_feather, $description){
            $sql = "INSERT INTO `work`(`name`, `icon_feather`, `description`) VALUES ('$name','$icon_feather','$description')";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function deleteWork($id){
            $sql = "DELETE FROM `work` WHERE `id`=$id";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }
     }
?>