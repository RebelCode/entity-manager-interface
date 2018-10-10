<?php

namespace RebelCode\Entity;

use Dhii\Util\String\StringableInterface as Stringable;
use RuntimeException;

/**
 * An entity manager that can delete entities by ID.
 *
 * @since [*next-version*]
 */
interface DeleteCapableManagerInterface
{
    /**
     * Deletes the entity with the given ID.
     *
     * @since [*next-version*]
     *
     * @param int|string|Stringable $id The ID of the entity to delete.
     *
     * @throws RuntimeException If the entity with the given ID does not exist or could not be deleted.
     */
    public function delete($id);
}
