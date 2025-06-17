<?php
class UserController
{
    public $userModel;
    function __construct()
    {
        $this->userModel = new UserModel();
    }
    
    public function login()
    {
        require_once PATH_VIEW . 'login.php';
    }
    public function logout()
    {
        session_destroy();
        header("location: " . BASE_URL);
    }
    public function loginProcess()
    {
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"] ?? "";
            $password = $_POST["password"] ?? "";

            if ($username === "edu" && $password === "learn2023") {
                $_SESSION["username"] = $username;
                header("location: " . BASE_URL . "?action=adminList");
                exit;
            } else {
                $error = "Thông tin đăng nhập không hợp lệ";
            }
        }
    }
}
