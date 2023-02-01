<?php

namespace App\Services;

use jcobhams\NewsApi\NewsApi;
use jcobhams\NewsApi\NewsApiException;
use Symfony\Component\Validator\Constraints\Date;

class NewsApiBitcoinService
{
    /**
     * @throws NewsApiException
     */
    public function getBitcoinArticles()
    {
        $newsapi = new NewsApi('3b8d515c1eb2482f95c571dc86e9b2de');
        return $newsapi->getTopHeadLines('bitcoin');
    }
}