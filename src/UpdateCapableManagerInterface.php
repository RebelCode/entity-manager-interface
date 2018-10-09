<?php

namespace RebelCode\Entity;

use Dhii\Util\String\StringableInterface as Stringable;
use RuntimeException;
use stdClass;
use Traversable;

/**
 * An entity manager that can update existing entities' data, either fully or partially.
 *
 * @since [*next-version*]
 */
interface UpdateCapableManagerInterface
{
    /**
     * Updates an existing entity by ID with new data.
     *
     * @since [*next-version*]
     *
     * @param int|string|Stringable      $id   The ID of the entity to update.
     * @param array|stdClass|Traversable $data The map of data changes to apply to the entity.
     *
     * @throws RuntimeException If the entity with the given ID does not exist or could not be updated.
     */
    public function update($id, $data);
}
