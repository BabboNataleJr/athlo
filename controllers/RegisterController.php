<?php
namespace Controllers;

class RegisterController
{
    private $user;

    public function __construct($author)
    {
        $this->user = $author;
    }

    public function showLogin()
    {
        $variables = [
            'message' => 'Effettua il login!',
        ];

        if (isset($_GET['error_message']) && !empty($_GET['error_message']))
        {
            $variables['error_message'] = $_GET['error_message'];
        }

        $page = [
            'title'     => "Effettua il login",
            'template'  => "login.html",
            'variables' => $variables,
        ];

        return $page;
    }

    public function showRegisterForm()
    {
        $variables = [];

        if (isset($_GET['error_message']) && !empty($_GET['error_message']))
        {
            $variables['error_message'] = $_GET['error_message'];
        }

        $page = [
            'title'    => 'Registrati!',
            'template' => 'register.html',
            'varibles' => $variables,
        ];

        return $page;
    }

    public function saveUser() 
    {
        if (isset($_POST['user']) && !empty($_POST['user']))
        {
            $user_data = $_POST['user'];

            $user = $this->user->findByKey($user_data['email'], 'email');

            if (!$user)
            {
                // TODO: sanitize and verify every user field
                $this->user->save($user);
            }
            else
            {
                $error_message = 'Cannot save the user. The email is already taken.';
                header('Location: /user/create?error_message=' . $error_message);
                exit;
            }
        }
    }

    public function checkLogin()
    {
        if (isset($_POST["user"])) 
        {
            $user_data = $_POST['user'];
            if (!empty($user_data['email']) && !empty($user_data['password'])) 
            {
                $user = $this->user->findByValue($user_data['email'], 'email');
    
                if (!$user)
                {
                    $error_message = 'No user found with this email';
                    header('Location: /user/login?error_message=' . $error_message);
                    exit;
                }
    
                $user_data_pwd = $user_data['password'];
    
                if ($user['password'] != md5($user_data_pwd))
                {
                    $error_message = 'The password is incorrect. Please, try again.';
                    header('Location: /user/login?error_message=' . $error_message);
                    exit;
                }
            }
            else
            {
                $error_message = 'Please, fill in all the required fields.';
                header('Location: /user/login?error_message=' . $error_message);
                exit;
            }

            // user authenticated, do something
            header('Location: /');
            exit;
        }
        else
        {
            $error_message = 'Please, fill in all the required fields.';
            header('Location: /user/login?error_message=' . $error_message);
            exit;
        }
    }
}