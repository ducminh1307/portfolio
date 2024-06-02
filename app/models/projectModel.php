<?php
class projectModel extends DB
{
    public function getProjects()
    {
        $sql = "SELECT p.id, p.project_type_id, p.name, p.image_thumb, p.content, p.on_top, pt.name AS project_type, p.sort FROM project p INNER JOIN project_type pt ON p.project_type_id = pt.id ORDER BY p.sort ASC";
        $rs = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($rs) > 0) {
            while ($row = mysqli_fetch_array($rs)) {
                $data[] = $row;
            }
        } else {
            $data = false;
        }
        return $data;
    }

    public function getProject($id)
    {
        $sql = "SELECT p.id, p.project_type_id, p.name, p.image_thumb, p.content, p.on_top, pt.name AS project_type, p.sort FROM project p INNER JOIN project_type pt ON p.project_type_id = pt.id WHERE p.id = $id";
        $rs = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($rs) > 0) {
            while ($row = mysqli_fetch_array($rs)) {
                $data[] = $row;
            }
        } else {
            $data = false;
        }
        return $data[0];
    }

    public function getProjectInPortfolio()
    {
        $sql = "SELECT p.id, p.name, p.image_thumb, p.content, p.on_top, pt.name AS project_type FROM project p INNER JOIN project_type pt ON p.project_type_id = pt.id WHERE `on_top` = 1 ORDER BY p.sort ASC";
        $rs = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($rs) > 0) {
            while ($row = mysqli_fetch_array($rs)) {
                $data[] = $row;
            }
        } else {
            $data = false;
        }
        return $data;
    }

    public function addProject($name, $projectType, $thumb, $content, $onTop, $sort)
    {
        $sql = "INSERT INTO `project`(`name`, `project_type_id`, `image_thumb`, `content`, `on_top`, `sort`) VALUES ('$name', '$projectType', '$thumb', '$content', '$onTop', '$sort')";
        $rs = mysqli_query($this->conn, $sql);
        return $rs;
    }

    public function updateProject($id, $name, $projectType, $thumb, $content, $onTop, $sort)
    {
        $sql = "UPDATE `project` SET `name`='$name', `project_type_id` = '$projectType', `image_thumb` = '$thumb', `content` = '$content', `on_top` = '$onTop', `sort` = '$sort' WHERE `id`= $id";
        $rs = mysqli_query($this->conn, $sql);
        return $rs;
    }

    public function updateProjectNoThumb($id, $name, $projectType, $content, $onTop, $sort)
    {
        $sql = "UPDATE `project` SET `name`='$name', `project_type_id` = '$projectType', `content` = '$content', `on_top` = '$onTop', `sort` = '$sort' WHERE `id`= $id";
        $rs = mysqli_query($this->conn, $sql);
        return $rs;
    }

    public function deleteProject($id)
    {
        $sql = "DELETE FROM `project` WHERE `id`=$id";
        $rs = mysqli_query($this->conn, $sql);
        return $rs;
    }
}
