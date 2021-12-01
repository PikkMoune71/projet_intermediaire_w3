<?php
    class LoginController {
        function loginAction() {
            $username = $this->request->get('username');
            $password = $this->request->get('password');

            $this->loadModel('user');
            if ($this->users->validate($username, $password))
            {
                $userData = $this->users->fetch($username);
                AuthStorage::save($username, $userData);
                $this->redirect('secret_area');
            }
            else
            {
                $this->view->message = 'Invalid login';
                $this->view->render('error');
            }
        }
    }