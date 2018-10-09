<?php

namespace RebelCode\Entity;

use Dhii\Util\String\StringableInterface as Stringable;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * An entity manager that can retrieve entities by ID.
 *
 * @since [*next-version*]
 */
interface GetCapableManagerInterface extends
    /* @since [*next-version*] */
    ContainerInterface
{
    /**
     * Retrieves an entity by ID.
     *
     * @since [*next-version*]
     *
     * @param int|string|Stringable $id The ID of the entity to retrieve.
     *
     * @throws NotFoundExceptionInterface  If an entity does not exist for the given ID.
     * @throws ContainerExceptionInterface If an error occurred while retrieving the entity.
     *
     * @return mixed The entity for the given ID.
     */
    public function get($id);

    /**
     * Checks if an entity with the given.
     *
     * @since [*next-version*]
     *
     * @param int|string|Stringable $id The ID of the entity to check for.
     *
     * @return bool True if the entity with the given ID exists, false if not.
     */
    public function has($id);
}
