<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\Criteria;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ApiArticleController extends AbstractController
{
    #[Route('/api/article', name: 'app_api_article')]
    public function index(ArticleRepository $articleRepository, NormalizerInterface $normalizer): JsonResponse
    {
        dump($this->getUser());

        return new JsonResponse(
            ['results' => $normalizer->normalize($articleRepository->findAll())]
        );
    }


    #[Route('/api/article/{id}', name: 'app_api_article_show', methods: ['GET'])]
    public function show(Article $article, NormalizerInterface $normalizer): JsonResponse
    {
        if ($this->getUser()->getUserIdentifier() == $article->getAuthor()->getUserIdentifier()) {
            return new JsonResponse(
                ['results' => $normalizer->normalize($article)]
            );
        } else {
            throw new \LogicException("C'est pas vous.");
            return new JsonResponse(
                ['results' => "error"]
            );
        }

}
}
