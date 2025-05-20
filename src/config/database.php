<?php
/**
 * Database Configuration
 */
class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db_name = 'milk_leaf_db';
    private $conn;

    /**
     * Connect to the database
     * @return mysqli connection object
     */
    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
            if ($this->conn->connect_error) {
                throw new Exception('Connection Error: ' . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
} 