<?php
require_once("mysql.inc.php");

class Page
{
    public static function getAllPages()
    {
        global $conn;
        $sql = "SELECT `id`, `name` FROM pagini WHERE deleted_at IS NULL";
        return $conn->query($sql);
    }

    public static function getPageById($id)
    {
        global $conn;
        $sql = "SELECT * FROM pagini WHERE id = ? AND deleted_at IS NULL";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $page = $result->fetch_assoc();
        return $page;
    }

    public static function create($name, $continut, $data)
    {
        global $conn;
        $sql = "INSERT INTO pagini (name, continut, data) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $continut, $data);
        $stmt->execute();
    }

    public static function update($id, $name, $continut, $data)
    {
        global $conn;
        $sql = "UPDATE pagini SET name = ?, continut = ?, data = ? WHERE id = ? AND deleted_at IS NULL";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $name, $continut, $data, $id);
        $stmt->execute();
    }

    public static function delete($id)
    {
        global $conn;
        $sql = "UPDATE pagini SET deleted_at = NOW() WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
