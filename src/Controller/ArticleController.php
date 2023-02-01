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
        return $this->render('article/bitcoin.html.twig', [
            'articles' => $agregatorService->getBitcoinArticles(),
        ]);
    }

    #[Route('/apple', name: 'app_home_apple')]
    public function apple(NewsAgregatorService $agregatorService)
    {
        return $this->render('article/apple.html.twig', [
            'articles' => $agregatorService->getAppleArticles(),
        ]);
    }

    /**
     * @throws NewsApiException
     */
    #[Route('/currentGeneralArticle/{id}')]
    public function showCurrentGeneralArticle(NewsAgregatorService $agregatorService, int $id): Response
    {
        return $this->render('article/showArticle.html.twig', [
            'articles' => $agregatorService->getGeneralArticles(),
            'id' => $id,
        ]);
    }

    /**
     * @throws NewsApiException
     */
    #[Route('/currentBitcoinArticle/{id}')]
    public function showCurrentBitcoinArticle(NewsAgregatorService $agregatorService, int $id): Response
    {
        return $this->render('article/showArticle.html.twig', [
            'articles' => $agregatorService->getBitcoinArticles(),
            'id' => $id,
        ]);
    }


    /**
     * @throws NewsApiException
     */
    #[Route('/currentAppleArticle/{id}')]
    public function showCurrentAppleArticle(NewsAgregatorService $agregatorService, int $id): Response
    {
        return $this->render('article/showArticle.html.twig', [
            'articles' => $agregatorService->getAppleArticles(),
            'id' => $id,
        ]);
    }
}
