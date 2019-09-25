<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\RTRRepository;

class RTRController extends AbstractController {

    private $rtr;

    public function __construct(RTRRepository $rtr){
        $this->rtr = $rtr;
    }

    /**
     * @Route("/rms/get/year", name="rms_get_year", methods={"GET"})
     */
    public function getYear(){
        return $this->json($this->rtr->getYear());
    }
}