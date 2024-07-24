<?php
// app/controllers/TodoController.php
include_once __DIR__ . '/../../config/database.php';
include_once __DIR__ . '/../models/model.php';

class TodoController {
    private $db;
    private $todo;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->todo = new Todo($this->db);
    }

    public function index() {
        $stmt = $this->todo->read();
        $todos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include_once __DIR__ . '/../views/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->todo->title = $_POST['title'];
            $this->todo->description = $_POST['description'];
            $this->todo->create();
            header("Location: ../../index.php");
        } else {
            include_once __DIR__ . '/../views/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->todo->id = $id;
            $this->todo->title = $_POST['title'];
            $this->todo->description = $_POST['description'];
            $this->todo->update();
            header("Location: ../../index.php");
        } else {
            $stmt = $this->todo->read();
            $todo = $stmt->fetch(PDO::FETCH_ASSOC);
            include_once __DIR__ . '/../views/edit.php';
        }
    }

    public function delete($id) {
        $this->todo->id = $id;
        $this->todo->delete();
        header("Location: ../../index.php");
    }
}
?>
