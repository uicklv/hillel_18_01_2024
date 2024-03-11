<?php

class AuthController
{
    use Validator;
    public function login()
    {
        return view('login.php');
    }

    public function auth()
    {
        $this->validate(Request::getData(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = Request::get('email');
        $password = Request::get('password');

        $connector = Connector::getInstance();
        $sqlBuilder = new MySqlQueryBuilder();
        $repository = new UserRepository($connector, $sqlBuilder);
        $user = $repository->getByEmail($email);
        if ($user && password_verify($password, $user->password)) {
            //todo login


            /*
             * створити таблицю для зберігання сесій юзера.
             *
             *
             */

            setcookie('auth', true, time() + 3600 * 24 * 7 , '/');
//            setcookie('auth', true, time() - 3600 * 24 * 7 , '/');




            echo $_COOKIE['auth'];

            exit;
        }

        Session::set('validation_errors', ['email' => 'Invalid email or password']);
        Response::redirect(Request::getReferer());
    }

    public function register()
    {
        return view('register.php');
    }

    public function registerProcess()
    {
        $this->validate(Request::getData(), [
            'name' => 'required|max:100',
            'age' => 'int',
            'gender' => 'enum:male,female',
            'password' => 'required|min:8|max:100',
            'email' => 'required|min:8|max:200|email'
        ]);

        $name = Request::get('name');
        $email =  Request::get('email');
        $age =  Request::get('age', 'int');
        $gender =  Request::get('gender');
        $password =  password_hash(Request::get('password'), PASSWORD_BCRYPT);

        $connector = Connector::getInstance();
        $sqlBuilder = new MySqlQueryBuilder();
        $repository = new UserRepository($connector, $sqlBuilder);

        $result = $repository->create(compact('name', 'email', 'age', 'gender', 'password'));

        if ($result) {
            Session::set('success', 'Registered Successfully!');
            Response::redirect(url('login'));
        } else {
            // todo set server errror

        }
    }
}