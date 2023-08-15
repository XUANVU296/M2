<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $role = $_REQUEST['role'];
    class User {
        protected $name;
        protected $email;
        public $role;
        public function __construct ($name, $email, $role) {
            $this->name = $name;
            $this->email = $email;
            $this->role = $role;
        }
        public function getInfo() {
            return "Tên: $this->name, email: $this->email";
        }
        public function isAdmin() {
            if ($this->role == 1) {
                echo "Là admin";
            } else if ($this->role == 2) {
                echo "là người dùng bình thường";
            }
        }
        public function setName($name) {
            $this->name = $name;
        }
        public function setEmail($email) {
            $this->email = $email;
        }
    }
    $user = new User($name, $email, $role);
    echo $user->getInfo() . "<br>";
    $user->isAdmin();
}
?>
<form action="" method="post">
    Name: <input type="text" name="name" id=""><br>
    Email: <input type="text" name="email" id=""><br>
    Role: <select name="role" id="">
            <option value="1">1</option>
            <option value="2">2</option>
        </select><br>
    <input type="submit" value="Kiểm tra">
</form>