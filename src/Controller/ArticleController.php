<?php

namespace App\Controller;

use App\Services\NewsAgregatorService;
use jcobhams\NewsApi\NewsApiException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    #[Route('/bitcoin', name: 'app_home_test')]
    public function bitcoin(NewsAgregatorService $agregatorService): Response
    {
        return $this->render('home/index.html.twig', [
            'articles' => $agregatorService->getBitcoinArticles(),
        ]);
    }

    #[Route('/apple', name: 'app_home_apple')]
    public function apple(NewsAgregatorService $agregatorService)
    {
        return $this->render('home/index.html.twig', [
            'articles' => $agregatorService->getAppleArticles(),
        ]);
    }

    /**
     * @throws NewsApiException
     */
    #[Route('/currentArticle/{id}')]
    public function showCurrentGeneralArticle(NewsAgregatorService $agregatorService, int $id): Response
    {
        return $this->render('article/showArticle.html.twig', [
            'articles' => $agregatorService->getGeneralArticles(),
            'id' => $id,
        ]);
    }
}
