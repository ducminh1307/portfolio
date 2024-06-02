<?php
     class aboutModel extends DB {
        public function getAbout(){
            $sql = "SELECT * FROM about";
            $rs = mysqli_query($this->conn, $sql);
            if(mysqli_num_rows($rs)>0) {
                while($row = mysqli_fetch_array($rs)){
                    $data[] = $row;
                }
            } else {
                $data = false;
            }
            return $data[0];
        }

        public function updateAbout($name, $image, $description){
            $sql = "UPDATE `about` SET `name`='$name',`image`='$image',`description`='$description' WHERE 1";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }

        public function updateAboutWithoutImage($name, $description){
            $sql = "UPDATE `about` SET `name`='$name',`description`='$description' WHERE 1";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }
     }
?>