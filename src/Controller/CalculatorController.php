<?php


namespace App\Controller;


use App\Service\CalculatorService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends AbstractController
{
    private CalculatorService $calculService;

    public function __construct(CalculatorService $calculService){
        $this->calculService = $calculService;
    }
    /**
     * @Route("/calculator", name="get_calcul", methods={"POST"})
     */
    public function calcul(Request $request) : JsonResponse{

        $addService = new CalculatorService();
        return $this->calculService->Traitement($request);

    }
}