<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Eko";
$request->password = "rahasis";

//ValidationUtil::validate($reques);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $addres;
    public ?string $email;

}

$register = new RegisterUserRequest();
$register->name = "";
$register->addres = "subang";
$register->email = "eko@gmail.com";

ValidationUtil::validateReflection($register);