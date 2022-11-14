<?php

namespace App\Controller;

class UserController extends AbstractController
{

    public function index()
    {
        // TODO: Implement index() method.
    }

    public function contact ()
    {
        self::render("user/contact");
    }

    public function register ()
    {
        self::render("user/register");
    }

    public function login ()
    {
        self::render("user/login");
    }
}