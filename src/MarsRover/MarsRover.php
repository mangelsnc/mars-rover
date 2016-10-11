<?php
namespace MarsRover;

/**
 * Class MarsRover
 * @package MarsRover
 */
class MarsRover
{
    const NORTH = 'n';
    const EAST = 'e';
    const SOUTH = 's';
    const WEST = 'w';

    const FORWARD = 'f';
    const BACKWARD = 'b';
    const RIGHT = 'r';
    const LEFT = 'l';

    private $direction;
    private $x;
    private $y;



    public function __construct($direction = self::NORTH, $position = [0, 0])
    {
        $this->direction = $direction;
        $this->x = $position[0];
        $this->y = $position[1];
    }

    public function getPosition()
    {
        return [$this->x, $this->y];
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function move($movement)
    {
        if (self::NORTH === $this->getDirection()) {
            if (self::FORWARD === $movement) {
                $this->y++;

                return true;
            }

            if (self::BACKWARD === $movement) {
                $this->y--;

                return true;
            }

            if (self::RIGHT === $movement) {
                $this->direction = self::EAST;

                return true;
            }

            if (self::LEFT === $movement) {
                $this->direction = self::WEST;

                return true;
            }
        }

        if (self::EAST === $this->getDirection()) {
            if (self::FORWARD === $movement) {
                $this->x++;

                return true;
            }

            if (self::BACKWARD === $movement) {
                $this->x--;

                return true;
            }

            if (self::RIGHT === $movement) {
                $this->direction = self::SOUTH;

                return true;
            }

            if (self::LEFT === $movement) {
                $this->direction = self::NORTH;

                return true;
            }
        }

        if (self::SOUTH === $this->getDirection()) {
            if (self::FORWARD === $movement) {
                $this->y--;

                return true;
            }

            if (self::BACKWARD === $movement) {
                $this->y++;

                return true;
            }

            if (self::RIGHT === $movement) {
                $this->direction = self::WEST;

                return true;
            }

            if (self::LEFT === $movement) {
                $this->direction = self::EAST;

                return true;
            }
        }

        if (self::WEST === $this->getDirection()) {
            if (self::FORWARD === $movement) {
                $this->x--;

                return true;
            }

            if (self::BACKWARD === $movement) {
                $this->x++;

                return true;
            }

            if (self::RIGHT === $movement) {
                $this->direction = self::NORTH;

                return true;
            }

            if (self::LEFT === $movement) {
                $this->direction = self::SOUTH;

                return true;
            }
        }
    }
}