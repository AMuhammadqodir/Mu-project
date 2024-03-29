<?php
class Database {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function close() {
        $this->connection->close();
    }

    public function query($sql) {
        return $this->connection->query($sql);
    }

    // Другие методы для выполнения различных операций с базой данных могут быть добавлены здесь
}

// Пример использования:

?>
