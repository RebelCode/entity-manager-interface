<?php

namespace RebelCode\Entity;

/**
 * An entity manager that supports all entity operations.
 *
 * @since [*next-version*]
 */
interface EntityManagerInterface extends
    /* @since [*next-version*] */
    AddCapableManagerInterface,
    /* @since [*next-version*] */
    GetCapableManagerInterface,
    /* @since [*next-version*] */
    QueryCapableManagerInterface,
    /* @since [*next-version*] */
    SetCapableManagerInterface,
    /* @since [*next-version*] */
    UpdateCapableManagerInterface,
    /* @since [*next-version*] */
    DeleteCapableManagerInterface
{
}
