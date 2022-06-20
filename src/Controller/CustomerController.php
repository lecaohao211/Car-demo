<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends Controller
{
    /**
     * @Route("/customer", name="customer")
     */
    public function index(): Response
    {
        return $this->render('customer/index.html.twig', [
            'controller_name' => 'CustomerController',
        ]);
    }
    /**
     * @Route("/customer/all/descending", name="get_cutstomer_descending")
     */
    public function getCustomerAscending(){
        //Call doctrine
        $doctrine = $this->get
    }
}
