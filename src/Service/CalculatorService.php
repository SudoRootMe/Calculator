<?php


namespace App\Service;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CalculatorService
{
    public function traitement(Request $request): JsonResponse
    {

        $data = json_decode($request->getContent(), true);
        $operateur = str_split($data['operande']);


        $service = new MultiplicationService;
        $operateur = $service->getResult($operateur);
        $service = new DivisionService;
        $operateur = $service->getResult($operateur);
        $service = new AdditionService;
        $operateur = $service->getResult($operateur);
        $service = new SoustractionService;
        $operateur = $service->getResult($operateur);

        $results = $operateur == [] ? "Division par 0" : $operateur;
        return new JsonResponse(['Resultat' => $results], Response::HTTP_CREATED);
    }
}