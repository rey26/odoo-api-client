<?php

declare(strict_types=1);

namespace Flux\OdooApiClient\Manager;

use Flux\OdooApiClient\Model\BaseInterface;
use Flux\OdooApiClient\Operations\Object\ExecuteKw\Arguments\SearchDomainsInterface;
use Flux\OdooApiClient\Operations\Object\ExecuteKw\Options\SearchReadOptions;
use Flux\OdooApiClient\Operations\Object\ExecuteKw\Options\SearchReadOptionsInterface;
use Flux\OdooApiClient\Operations\Object\ExecuteKw\RecordListOperationsInterface;
use LogicException;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Serializer;

final class ModelListManager implements ModelListManagerInterface
{
    /** @var Serializer */
    private $serializer;
    /** @var RecordListOperationsInterface */
    private $recordListOperations;

    public function __construct(
        Serializer $serializer,
        RecordListOperationsInterface $recordListOperations
    ) {
        $this->serializer = $serializer;
        $this->recordListOperations = $recordListOperations;
    }

    /**
     * @param string $class
     * @param int $id
     *
     * @return BaseInterface|null
     *
     * @throws ExceptionInterface
     */
    public function find(string $class, int $id): ?BaseInterface
    {
        $modelName = $this->getModelNameFromClass($class);

        $results = $this->recordListOperations->read($modelName, [$id]);

        if (count($results) === 0) {
            return null;
        }

        /** @var BaseInterface $denormalizedModel */
        $denormalizedModel = $this->serializer->denormalize($results[0], $class);
        return $denormalizedModel;
    }

    /**
     * @param string $class
     * @param SearchDomainsInterface|null $searchDomains
     *
     * @return BaseInterface|null
     *
     * @throws ExceptionInterface
     */
    public function findOneBy(string $class, ?SearchDomainsInterface $searchDomains = null): ?BaseInterface
    {
        $searchReadOptions = new SearchReadOptions();
        $searchReadOptions->setLimit(1);

        $results = $this->findBy($class, $searchDomains, $searchReadOptions);

        if (count($results) === 0) {
            return null;
        }

        return $results[0];
    }

    /**
     * {@inheritDoc}
     *
     * @throws ExceptionInterface
     */
    public function findBy(
        string $class,
        ?SearchDomainsInterface $searchDomains = null,
        ?SearchReadOptionsInterface $searchReadOptions = null
    ): array {
        $modelName = $this->getModelNameFromClass($class);

        $results = $this->recordListOperations->search_read(
            $modelName,
            $searchDomains,
            $searchReadOptions
        );

        /** @var BaseInterface[] $denormalizedModels */
        $denormalizedModels = $this->serializer->denormalize($results, sprintf('%s[]', $class));

        return $denormalizedModels;
    }

    private function getModelNameFromClass(string $class): string
    {
        $callable = [$class, 'getOdooModelName'];
        if (false === is_callable($callable)) {
            throw new LogicException(sprintf(
                'The provided class should be a class implementing "%s"',
                BaseInterface::class
            ));
        }

        return call_user_func($callable);
    }

    public function getRecordListOperations(): RecordListOperationsInterface
    {
        return $this->recordListOperations;
    }

    public function getSerializer(): Serializer
    {
        return $this->serializer;
    }
}
