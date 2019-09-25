<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\BranchesRepository;

class BranchController extends AbstractController {

    private $branch;

    public function __construct(BranchesRepository $branch){
        $this->branch = $branch;
    }

    /**
     * @Route("/get/branches", name="rms_get_branches", methods={"GET"})
     */
    public function getList(){
        return $this->json($this->branch->getList());
    }
}