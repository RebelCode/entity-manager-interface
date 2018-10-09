<?php

namespace RebelCode\Entity;

use Dhii\Collection\SetCapableInterface;
use Dhii\Util\String\StringableInterface as Stringable;
use RuntimeException;

/**
 * An entity manager that can set new entities to replace existing ones.
 *
 * @since [*next-version*]
 */
interface SetCapableManagerInterface extends
    /* @since [*next-version*] */
    SetCapableInterface
{
    /**
     * Replaces an existing entity by ID with a new entity.
     *
     * @since [*next-version*]
     *
     * @param int|string|Stringable $id     The ID of the existing entity.
     * @param mixed                 $entity The replacement entity.
     *
     * @throws RuntimeException If the entity with the given ID does not exist or could not be replaced.
     */
    public function set($id, $entity);
}
