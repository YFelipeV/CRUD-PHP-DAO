<?php

namespace Connection;
class dbConnection extends \mysqli
{
    private $conn;

    public function openConnection()
    {
        $this->conn = new \mysqli('localhost', 'root', '', 'emjphp');
        $this->conn->set_charset('utf8mb4');

        if ($this->conn->connect_errno) {
            die("ERROR con la conexión: " . $this->conn->connect_error);
        } else {
            echo "Conectado";
        }

        return $this->conn;
    }

    public function close_Connection()
    {
        $this->conn->close();
    }
}