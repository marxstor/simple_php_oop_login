<?php

class Auth extends Database {

    // handles authentication of user
    protected function login() {
        if (empty($_POST["email"])) {
            $this->errors[] = "Please enter your email";
        } elseif (empty($_POST["password"])) {
            $this->errors[] = "Please enter your password";
        } else {
            $email = $_POST["email"];
            $password = $_POST["password"];
    
            $pdo = Database::connect();
            $sql = "SELECT user_email, user_password_hash FROM users WHERE user_email = :email";
            $query = $pdo->prepare($sql);
            $query->bindParam(":email", $email, PDO::PARAM_STR);
            $query->execute();
    
            $user = $query->fetch(PDO::FETCH_ASSOC);
    
            if ($user && password_verify($password, $user['user_password_hash'])) {
                // Password is correct, proceed with login
                $_SESSION['email'] = $user['user_email'];
                $_SESSION["user_login_status"] = 1;
                
                header("Location: home.php");
            } else {
                // Invalid email or password
                $this->errors[] = "Invalid email or password";
            }
    
            Database::disconnect();
        }

        // var_dump($_POST);
    }

    // handles registration of user
    protected function registerUser() {
        if (empty($_POST["username"])) {
            $this->errors[] = "Please enter your username";
        } elseif (empty($_POST["email"])) {
            $this->errors[] = "Please enter your email";
        } elseif (empty($_POST["password"])) {
            $this->errors[] = "Please enter your password";
        }else {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            
            $pdo = Database::connect();
            $sql = "INSERT INTO users(user_name, user_password_hash, user_email) VALUES (:username, :password, :email)";
            $query = $pdo->prepare($sql);
            $query->bindParam(":username", $username, PDO::PARAM_STR);
            $query->bindParam(":password", $hashPassword, PDO::PARAM_STR);
            $query->bindParam(":email", $email, PDO::PARAM_STR);
            $query->execute();

            // closing the database connection
            Database::disconnect();

            $this->messages[] = "Account created succesfully";
        }
    }

    // handles the checking if user already exist
    protected function isUserExist() {
        $email = $_POST["email"];

        $pdo = Database::connect();
        $sql = "SELECT COUNT(user_email) as user_count FROM users where user_email = :email";
        $query = $pdo->prepare($sql);
        $query->bindParam(":email", $email, PDO::PARAM_STR);
        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);

        Database::disconnect();

        if($result["user_count"] > 0) {
            $this->messages[] = "Account already exist";
            echo "<script>
                    alert('".$this->messages[0]."');
                    window.location.href = 'signup.php';
                </script>";
            exit();
        }

        $this->registerUser();
    }
    

    // handle logout 
    protected function logOut() {
        $_SESSION = array();
        session_destroy();
        session_unset();
    }

    


}