<?php

namespace RebelCode\Entity\EntityManagerInterface\UnitTest;

use Xpmock\TestCase;
use RebelCode\Entity\EntityManagerInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class EntityManagerInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\Entity\EntityManagerInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                     ->add()
                     ->get()
                     ->query()
                     ->has()
                     ->set()
                     ->update()
                     ->delete();

        return $mock->new();
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'A valid instance of the test subject could not be created.'
        );

        $this->assertInstanceOf(
            'Psr\Container\ContainerInterface',
            $subject,
            'Test subject does not implement expected parent interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Collection\AddCapableInterface',
            $subject,
            'Test subject does not implement expected parent interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Collection\SetCapableInterface',
            $subject,
            'Test subject does not implement expected parent interface.'
        );

        $this->assertInstanceOf(
            'RebelCode\Entity\AddCapableManagerInterface',
            $subject,
            'Test subject does not implement expected parent interface.'
        );

        $this->assertInstanceOf(
            'RebelCode\Entity\GetCapableManagerInterface',
            $subject,
            'Test subject does not implement expected parent interface.'
        );

        $this->assertInstanceOf(
            'RebelCode\Entity\QueryCapableManagerInterface',
            $subject,
            'Test subject does not implement expected parent interface.'
        );

        $this->assertInstanceOf(
            'RebelCode\Entity\SetCapableManagerInterface',
            $subject,
            'Test subject does not implement expected parent interface.'
        );

        $this->assertInstanceOf(
            'RebelCode\Entity\UpdateCapableManagerInterface',
            $subject,
            'Test subject does not implement expected parent interface.'
        );

        $this->assertInstanceOf(
            'RebelCode\Entity\DeleteCapableManagerInterface',
            $subject,
            'Test subject does not implement expected parent interface.'
        );
    }
}
