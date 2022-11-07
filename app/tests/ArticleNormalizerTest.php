<?php

use App\Serializer\Normalizer\ArticleNormalizer;
use PHPUnit\Framework\TestCase;

class ArticleNormalizerTest extends TestCase
{
    private ArticleNormalizer $normalizer;

    public function setUp(): void
    {
        $this->normalizer = new ArticleNormalizer();
    }

    /**
     * @dataProvider dataProvider
     */
    public function testSupportsNormalization($data, $expected): void {
        $this->assertSame(
            $this->normalizer->supportsNormalization($data),
            $expected
        );
    }

    public function dataProvider()
    {
        return [
            "article" => [new \App\Entity\Article(), true],
            "normalizer" => [new ArticleNormalizer(), true]

        ];
    }
}