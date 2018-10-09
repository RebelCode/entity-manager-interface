<?php

namespace RebelCode\Entity;

use Dhii\Collection\AddCapableInterface;
use Dhii\Util\String\StringableInterface as Stringable;
use RuntimeException;

/**
 * An entity manager that can add new entities to its storage, be it temporary or otherwise.
 *
 * @since [*next-version*]
 */
interface AddCapableManagerInterface extends
    /* @since [*next-version*] */
    AddCapableInterface
{
    /**
     * Adds an entity.
     *
     * Depending on the implementation, the ID of the entity could either be part of the entity itself or assigned to
     * it when added.
     *
     * @since [*next-version*]
     *
     * @param mixed $entity The entity to add.
     *
     * @throws RuntimeException If the entity could not be added.
     *
     * @return int|string|Stringable|null The ID of the added entity.
     */
    public function add($entity);
}
