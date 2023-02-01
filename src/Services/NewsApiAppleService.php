<?php

namespace App\Services;

use jcobhams\NewsApi\NewsApi;
use jcobhams\NewsApi\NewsApiException;

class NewsApiAppleService
{
    /**
     * @throws NewsApiException
     */
    public function getAppleArticles()
    {
        $newsapi = new NewsApi('3b8d515c1eb2482f95c571dc86e9b2de');
        return $newsapi->getTopHeadLines('apple');
    }
}