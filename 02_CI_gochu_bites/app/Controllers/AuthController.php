<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Controllers\BaseController;

class AuthController extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
    
            $userModel = new AuthModel();
            $user = $userModel->where('username', $username)->first();
    
            if ($user && password_verify($password, $user['password'])) {
                // Set session
                $this->session->set([
                    'username' => $user['username'],
                    'logged_in' => true
                ]);
    
                // Redirect to home page after successful login
                echo "Login successful! Redirecting...";
                return redirect()->to('/');
            } else {
                // Handle invalid login
                echo "Invalid username or password!";
                return redirect()->to('/login');
            }
        }
    
        return view('login');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
