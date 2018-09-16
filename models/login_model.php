<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 15-Sep-18
 * Time: 11:21 AM
 */
class Login_Model extends Model
{
    private $user_id;
    private $username;
    private $pwd;
    private $user_type;
    private $user_status;
    private $name;

    public function __construct()
    {
        parent::__construct();
        /*echo Hash::create('md5', "admintwo",HASH_PASSWORD_KEY).'<br />'; */

    }

    public function loginDo()
    {
        $this->username = $_POST['username'];
        $this->pwd = $_POST['password'];
        $stmt = $this->db->prepare("SELECT user_type,user_status,u_ID FROM login WHERE username = :username AND pwd = :pwd");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array(
            ':username' => $this->username,
            ':pwd' => Hash::create('md5', $this->pwd, HASH_PASSWORD_KEY)
        ));
        $count = $stmt->rowCount();
        if ($count > 0) {
            $result = $stmt->fetchAll();
            foreach ($result as $row){
                $this->user_type = $row['user_type'];
                $this->user_status = $row['user_status'];
                $this->user_id = $row['u_ID'];
            }
            if ($this->user_status == 'active') {
                $this->initLoginSession();

                if ($_SESSION['user_type'] == 'student' ) {
                    $stmt = $this->db->prepare("SELECT first_name FROM student WHERE std_ID = :user_id");
                    $stmt->execute(array(':user_id' => $this->user_id));
                    $result = $stmt->fetch();
                    $this->name = $result['first_name'];
                    Session::set('name',$this->name);
                    header('location: ../studentHome');
                } else if ($_SESSION['user_type'] == 'admin' ) {
                    $stmt = $this->db->prepare("SELECT full_name FROM admin WHERE admin_ID = :user_id");
                    $stmt->execute(array(':user_id' => $this->user_id));
                    $result = $stmt->fetch();
                    $this->name = $result['full_name'];
                    Session::set('name',$this->name);
                    header('location: ../adminHome');
                }
            } else {
                $message = "Sorry, your account has been deactivated\\nActivate your account and try again";
                echo "<script type='text/javascript'>alert('$message');window.location = \"../login/index\";</script>";
            }
        } else {
            $message = "Username and/or Password incorrect . \\nTry again . ";
            echo "<script type = 'text/javascript' > alert('$message');window . location = \"../login/index\";</script>";
        }
    }

    public function initLoginSession() {
        Session::init();
        Session::set('user_id',$this->user_id);
        Session::set('username', $this->username);
        Session::set('user_type', $this->user_type);
        Session::set('loggedIn', "true");
    }
}