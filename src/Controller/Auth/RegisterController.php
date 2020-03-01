<?php

namespace App\Controller\Auth;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractFOSRestController
{
    public function index()
    {
        return true;
    }
}
