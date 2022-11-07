<?php

namespace App\Serializer\Normalizer;

use Doctrine\Common\Collections\Criteria;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
// use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class ArticleNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{
    public function __construct()
    {
    }

    public function normalize($object, $format = null, array $context = []): array
    {
        $criteria = Criteria::create()
            ->setMaxResults(2)
            ->orderBy(['id' => Criteria::DESC]);
        return [
            'id' => $object->getId(),
            'title' => $object->getTitle(),
            'content' => $object->getContent(),
            'picture' => $object->getPicture(),
            'comment' => array_map(
                function ($comment) {
                    return [
                        'id' => $comment->getId(),
                        'username'  => $comment->getUsername(),
                        'content'  => $comment->getContent()
                    ];
                    },
                $object->getComment()->matching($criteria)->toArray()
            ),
        ];
    }

    public function supportsNormalization($data, string $format = null, array $context = []): bool
    {
        return $data instanceof \App\Entity\Article;
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
