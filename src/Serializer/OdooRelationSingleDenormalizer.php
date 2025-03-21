<?php

declare(strict_types=1);

namespace FluxSE\OdooApiClient\Serializer;

use FluxSE\OdooApiClient\Model\OdooRelation;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * 123 ==> new OdooRelation(123)
 */
final class OdooRelationSingleDenormalizer implements DenormalizerInterface
{
    public function getSupportedTypes(?string $format): array
    {
        return [OdooRelation::class => false];
    }

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        if ($type !== OdooRelation::class) {
            return false;
        }

        return is_int($data);
    }

    public function denormalize($data, $type, $format = null, array $context = []): OdooRelation
    {
        if (!is_int($data)) {
            throw new InvalidArgumentException('The data should be an integer !');
        }

        return new OdooRelation($data);
    }
}
