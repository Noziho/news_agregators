<?php

namespace App\Controller;

use App\Services\NewsAgregatorService;
use jcobhams\NewsApi\NewsApiException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(NewsAgregatorService $agregatorService): Response
    {
        return $this->render('home/index.html.twig', [
            'articles' => $agregatorService->getGeneralArticles(),
        ]);
    }
}