<?php

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    // jika di ksih final akan error
    public function login(string $username, string $password): bool
    {
        return true;
    }
}

//error
class Fakefacebook extends Facebook
{
    //error
    public function login(string $username, string $password): bool
    {
        return false;
    }
}