<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];
    if (Auth::check())
    {
        echo 'logged in';
    }
    
    // finds position for ? in url so we can look at the url minus the get variables
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?');

    // if a ? was found, cuts off get variables if not just gives full url
    if ($get_pos !== false)
    {

        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
    }
    else
    {

        $request = $_SERVER['REQUEST_URI'];
    }

    //grabs info for user signup
    if (!empty($_POST['name']))
    {
        header('Location: /');
        die();

    } 
    elseif (!empty($_POST) && Auth::attempt($_POST['email_user'], $_POST['password'])) 
    {
        $user = new User;
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->username = $_POST['password'];
        $user->password = $_ENV['USER_PASS'];
        $user->save();
    }

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {

        case '/index':
            $main_view = '../views/ads/index.php';
            $data['indexItems'] = Item::all();
            break;
        case '/login':
            $main_view = '../views/users/signup.php';
            break;
        case '/show':
            $main_view = '../views/ads/show.php';
            break;
        case '/edit':
            $main_view = '../views/ads/edit.php';
            break;
        case '/create':
            $main_view = '../views/ads/create.php';
            break;
        case '/':
        case '/home':
            $main_view = '../views/home.php';
            break;
        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }
      
    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());




