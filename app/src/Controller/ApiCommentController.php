<?php

namespace App\Controller;

use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ApiCommentController extends AbstractController
{
    #[Route('/api/comment', name: 'app_api_comment')]
    public function comments(CommentRepository $commentRepository, NormalizerInterface $normalizer): JsonResponse
    {
        return new JsonResponse(
            ['results' => $normalizer->normalize($commentRepository->findAll())]
        );
    }

}
