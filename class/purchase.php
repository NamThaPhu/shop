<?php
class Purchase
{
    private $init = array("id" => null, "name" => null);

    function __construct($init)
    {
        foreach ($init as $key => $val) {
            $this->init[$key] = $val;
        }
    }

    function __get($property_name)
    {
        return $this->init[$property_name];
    }

    function __set($property_name, $property_value)
    {
        $this->init[$property_name] = $property_value;
    }

    function __to_string()
    {
        foreach ($this->init as $key => $val) {
            echo $key . " : " . $val . "<br>";
        }
    }

    function __to_json()
    {
        $json = $this->init;
        echo json_encode($json);
    }

    private function insert()
    {
        $connec = new Connection;
        $i = 0;
        foreach ($this->init as $key => $val) {
            $init[$i++] = $val;
        }
        $sql = "INSERT INTO `purchase`(`id`, `name`) 
                VALUES ('$init[0]', '$init[1]')";
        $result = mysqli_query($connec->open(), $sql);
        $connec->close();
        return $result;
    }

    function select($id)
    {
        $connec = new Connection;
        $sql = "SELECT * FROM `purchase` WHERE `id` = '$id'";
        $result = mysqli_query($connec->open(), $sql);
        $object = new Purchase(array());
        while ($row = mysqli_fetch_assoc($result)) {
            foreach ($row as $key => $val) {
                $object->__set($key, $val);
            }
        }
        $connec->close();
        return $object;
    }

    private function update($id)
    {
        $connec = new Connection;
        $i = 0;
        foreach ($this->init as $key => $val) {
            $init[$i++] = $val;
        }
        $sql = "UPDATE `purchase` 
                SET `id`='$init[0]',`name`='$init[1]' 
                WHERE `id` = '$id'";
        $result = mysqli_query($connec->open(), $sql);
        $connec->close();
        return $result;
    }

    private function delete($id)
    {
        $connec = new Connection;
        $sql = "DELETE FROM `purchase` WHERE `id` = '$id'";
        $result = mysqli_query($connec->open(), $sql);
        $connec->close();
        return $result;
    }

    private function default()
    {
        (new Purchase(array("id" => "1", "name" => "Chờ xác nhận")))->insert();
        (new Purchase(array("id" => "2", "name" => "Đã xác nhận")))->insert();
        (new Purchase(array("id" => "3", "name" => "Đang giao")))->insert();
        (new Purchase(array("id" => "4", "name" => "Đã giao")))->insert();
        (new Purchase(array("id" => "5", "name" => "Đã hủy")))->insert();
    }
}
