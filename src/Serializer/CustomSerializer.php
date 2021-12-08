<?php

namespace App\Serializer;

use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\Serializer\Exception\CircularReferenceException;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CustomSerializer implements NormalizerInterface
{

    /**
     * @inheritDoc
     */
    public function normalize($object, string $format = null, array $context = [])
    {
        return [
            'content' => 'Ceci est notre normalizer personnalisé.',
            'exception' => [
                'message' => $object->getMessage(),
                'code' => $object->getStatusCode()
            ]
        ];
    }

    /**
     * @inheritDoc
     */
    public function supportsNormalization($data, string $format = null): bool
    {
        return $data instanceof FlattenException;
    }
}