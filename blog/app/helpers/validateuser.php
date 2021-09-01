<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }
    if (empty($user['email'])) {
        array_push($errors, 'Enter a valid email');
    }
    if (empty($user['password'])) {
        array_push($errors, 'password is required');
    }
    if ($user['passwordConf'] != $user['password']) {
        array_push($errors, 'passwords do not match');
    }

    // $existingUser = selectOne('users', ['email' => $user['email']]);
    // if (isset($existingUser)) {
    //     array_push($errors, 'Email already exists');
    // }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');
        }
        if (isset($user['create-admin'])) {
            array_push($errors, 'Email already exists');
        }
    }

    return $errors;
}

//validating the login 

function validatelogin($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }
    if (empty($user['password'])) {
        array_push($errors, 'password is required');
    }
    
    return $errors;
}