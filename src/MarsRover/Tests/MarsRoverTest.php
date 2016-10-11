<?php
namespace MarsRover\Tests;

use MarsRover\MarsRover;

class MarsRoverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itShouldStartByDefaultAtZeroPoint()
    {
        $marsRover = new MarsRover();

        $this->assertEquals([0, 0], $marsRover->getPosition());
    }

    /**
     * @test
     */
    public function itShouldStartByDefaultAtDirectionNorth()
    {
        $marsRover = new MarsRover();

        $this->assertEquals(MarsRover::NORTH, $marsRover->getDirection());
    }

    /**
     * @test
     */
    public function itShouldMovesForwardWhenAskedForIt()
    {
        $marsRover = new MarsRover();

        $marsRover->move(MarsRover::FORWARD);

        $this->assertEquals([0, 1], $marsRover->getPosition());
    }

    /**
     * @test
     */
    public function itShouldMovesBackwardWhenAskedForIt()
    {
        $marsRover = new MarsRover();

        $marsRover->move(MarsRover::BACKWARD);

        $this->assertEquals([0, -1], $marsRover->getPosition());
    }

    /**
     * @test
     */
    public function itShouldMovesToRightWhenDirectionIsEastAndMoveIsForward()
    {
        $marsRover = new MarsRover(MarsRover::EAST, [0, 0]);

        $marsRover->move(MarsRover::FORWARD);

        $this->assertEquals([1, 0], $marsRover->getPosition());
    }

    /**
     * @test
     */
    public function itShouldMovesToLeftWhenDirectionIsWestAndMoveIsBackward()
    {
        $marsRover = new MarsRover(MarsRover::EAST, [0, 0]);

        $marsRover->move(MarsRover::BACKWARD);

        $this->assertEquals([-1, 0], $marsRover->getPosition());
    }

    /**
     * @test
     */
    public function itShouldMovesToDownWhenDirectionIsSouthAndMoveIsForward()
    {
        $marsRover = new MarsRover(MarsRover::SOUTH, [0, 0]);

        $marsRover->move(MarsRover::FORWARD);

        $this->assertEquals([0, -1], $marsRover->getPosition());
    }

    /**
     * @test
     */
    public function itShouldMovesToUpWhenDirectionIsSouthAndMoveIsBackward()
    {
        $marsRover = new MarsRover(MarsRover::SOUTH, [0, 0]);

        $marsRover->move(MarsRover::BACKWARD);

        $this->assertEquals([0, 1], $marsRover->getPosition());
    }

    /**
     * @test
     */
    public function itShouldMovesToLeftWhenDirectionIsWestAndMoveIsForward()
    {
        $marsRover = new MarsRover(MarsRover::WEST, [0, 0]);

        $marsRover->move(MarsRover::FORWARD);

        $this->assertEquals([-1, 0], $marsRover->getPosition());
    }

    /**
     * @test
     */
    public function itShouldMovesToRightWhenDirectionIsWestAndMoveIsBackward()
    {
        $marsRover = new MarsRover(MarsRover::WEST, [0, 0]);

        $marsRover->move(MarsRover::BACKWARD);

        $this->assertEquals([1, 0], $marsRover->getPosition());
    }

    /**
     * @test
     */
    public function itShouldRotateToEastWhenDirectionIsNorthAndAskedToMoveRight()
    {
        $marsRover = new MarsRover();

        $marsRover->move(MarsRover::RIGHT);

        $this->assertEquals(MarsRover::EAST, $marsRover->getDirection());
    }

    /**
     * @test
     */
    public function itShouldRotateToWestWhenDirectionIsNorthAndAskedToMoveLeft()
    {
        $marsRover = new MarsRover();

        $marsRover->move(MarsRover::LEFT);

        $this->assertEquals(MarsRover::WEST, $marsRover->getDirection());
    }

    /**
     * @test
     */
    public function itShouldRotateToSouthWhenDirectionIsEastAndAskedToMoveRight()
    {
        $marsRover = new MarsRover(MarsRover::EAST);

        $marsRover->move(MarsRover::RIGHT);

        $this->assertEquals(MarsRover::SOUTH, $marsRover->getDirection());
    }

    /**
     * @test
     */
    public function itShouldRotateToNorthWhenDirectionIsEastAndAskedToMoveLeft()
    {
        $marsRover = new MarsRover(MarsRover::EAST);

        $marsRover->move(MarsRover::LEFT);

        $this->assertEquals(MarsRover::NORTH, $marsRover->getDirection());
    }

    /**
     * @test
     */
    public function itShouldRotateToWestWhenDirectionIsSouthAndAskedToMoveRight()
    {
        $marsRover = new MarsRover(MarsRover::SOUTH);

        $marsRover->move(MarsRover::RIGHT);

        $this->assertEquals(MarsRover::WEST, $marsRover->getDirection());
    }

    /**
     * @test
     */
    public function itShouldRotateToEastWhenDirectionIsSouthAndAskedToMoveLeft()
    {
        $marsRover = new MarsRover(MarsRover::SOUTH);

        $marsRover->move(MarsRover::LEFT);

        $this->assertEquals(MarsRover::EAST, $marsRover->getDirection());
    }

    /**
     * @test
     */
    public function itShouldRotateToNorthWhenDirectionIsWestAndAskedToMoveRight()
    {
        $marsRover = new MarsRover(MarsRover::WEST);

        $marsRover->move(MarsRover::RIGHT);

        $this->assertEquals(MarsRover::NORTH, $marsRover->getDirection());
    }

    /**
     * @test
     */
    public function itShouldRotateToSouthWhenDirectionIsWestAndAskedToMoveLeft()
    {
        $marsRover = new MarsRover(MarsRover::WEST);

        $marsRover->move(MarsRover::LEFT);

        $this->assertEquals(MarsRover::SOUTH, $marsRover->getDirection());
    }
}