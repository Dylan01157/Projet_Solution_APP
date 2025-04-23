<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        
    // Récupère la date actuelle
    $today = new \DateTime();
    // Récupère le jour de la semaine (1 = Lundi, ..., 5 = Vendredi)
    $currentDay = $today->format('N'); // 1 = Lundi, ..., 5 = Vendredi

    // Passe la variable current_day à Twig
    return $this->render('home/index.html.twig', [
        'current_day' => $currentDay,  // Passer la variable au template
    ]);
}
}