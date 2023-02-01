<?php

namespace App\Services;
use jcobhams\NewsApi\NewsApiException;

class NewsAgregatorService
{
    private NewsApiBitcoinService $newsApiBitcoinService;
    private NewsApiAppleService $apiAppleService;
    private NewsApiGeneralService $apiGeneralService;
    public function __construct (NewsApiBitcoinService $newsApiService, NewsApiAppleService $apiAppleService, NewsApiGeneralService $apiGeneralService) {
        $this->newsApiBitcoinService = $newsApiService;
        $this->apiAppleService = $apiAppleService;
        $this->apiGeneralService = $apiGeneralService;
    }

    /**
     * @throws NewsApiException
     */
    public function getBitcoinArticles ()
    {
        return $this->newsApiBitcoinService->getBitcoinArticles();
    }

    /**
     * @throws NewsApiException
     */
    public function getAppleArticles ()
    {
        return $this->apiAppleService->getAppleArticles();
    }

    /**
     * @throws NewsApiException
     */
    public function getGeneralArticles ()
    {
        return $this->apiGeneralService->getGeneralArticles();
    }
}