<?php

class Robot {

    const DIRECTION_NORTH = 0;
    const DIRECTION_EAST = 1;
    const DIRECTION_SOUTH = 2;
    const DIRECTION_WEST = 3;
    private const POSITION_COMMANDS = array(
        self::DIRECTION_NORTH => [0, 1],
        self::DIRECTION_EAST => [1, 0],
        self::DIRECTION_SOUTH => [0, -1],
        self::DIRECTION_WEST => [-1, 0],
    );

    public $position = [0, 0];
    public $direction = self::DIRECTION_NORTH;

    public function __construct(array $position, int $direction) {
        $this->position = $position;
        $this->direction = $direction;
    }

    public function instructions(string $instructions): void {
        $instructionsCommands = array(
            'L' => function() { $this->turnLeft(); },
            'R' => function() { $this->turnRight(); },
            'A' => function() { $this->advance(); },
        );
        foreach (str_split($instructions) as $i) {
            if (!array_key_exists($i, $instructionsCommands))
                throw new InvalidArgumentException();
            $instructionsCommands[$i]();
        }
    }

    public function turnLeft(): Robot {
        $this->direction = ($this->direction - 1 >= self::DIRECTION_NORTH) ? $this->direction - 1 : self::DIRECTION_WEST;
        return $this;
    }

    public function turnRight(): Robot {
        $this->direction = ($this->direction + 1) % (self::DIRECTION_WEST + 1);
        return $this;
    }

    public function advance(): Robot {
        for($i = 0; $i < count($this->position); $i++)
            $this->position[$i] += self::POSITION_COMMANDS[$this->direction][$i];
        return $this;
    }

}


