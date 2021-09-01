<?php 

//provide functionality to only logged in users
function usersOnly($redirect = '/blog_index.php')
{
    if (empty($_SESSION['id'])) {
        $_SESSION['message'] = 'You need to login first';
        $_SESSION['type'] = 'error';
        header('location ' . BASE_URL . $redirect);
        exit(0);
    }
}

//provide functionality access to admin only 
function adminOnly($redirect = '/blog_index.php')
{
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])) {
        $_SESSION['message'] = 'You are not authorized ';
        $_SESSION['type'] = 'error';
        header('location ' . BASE_URL . $redirect);
        exit(0);
    }
}

//provide functionality to guests only 
function guestsOnly($redirect = '/blog_index.php')
{
    if (isset($_SESSION['id'])) {
        header('location ' . BASE_URL . $redirect);
        exit(0);
    }
}