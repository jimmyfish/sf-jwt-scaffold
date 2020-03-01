<?php

namespace App\Controller\Library\Librarian\Books;

use App\Entity\Book;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GetAllController extends AbstractFOSRestController
{
    public function index()
    {
        $data = $this->getDoctrine()
            ->getRepository(Book::class)
            ->findAll();

        return $this->json([
            'status' => 200,
            'data'   => $data
        ], 200);
    }
}
