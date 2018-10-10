<?php

namespace RebelCode\Entity;

use stdClass;
use Traversable;
use Dhii\Util\String\StringableInterface as Stringable;

/**
 * An entity manager that can query entities.
 *
 * @since [*next-version*]
 */
interface QueryCapableManagerInterface
{
    /**
     * Retrieves all the entities that match an optionally-given query.
     *
     * @since [*next-version*]
     *
     * @param array|stdClass|Traversable $query   Optional map of query filters. Typically, the mappings will consist
     *                                            of entity keys and values that must match for entities to be
     *                                            returned. However, this is depends on the implementation and
     *                                            additional keys may be accepted that are not entity data keys.
     * @param int|null                   $limit   Optional maximum number of entities to return, or null for no limit.
     *                                            Note that implementations may still impose a limit for large sets.
     * @param int|null                   $offset  Optional number of entities to offset for the result, or null for no
     *                                            offset. Offsets are applied after the $limit.
     * @param string|Stringable          $orderBy Optional name of the entity property by which to sort the returned
     *                                            entities, or null for no sorting.
     * @param bool                       $desc    Optional flag which if true will sort the entities in descending
     *                                            order. If false, which is default, returned entities are sorted in
     *                                            ascending order. Only applicable if the $orderBy param is not null.
     */
    public function query($query = array(), $limit = null, $offset = null, $orderBy = null, $desc = false);
}
