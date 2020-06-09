<?php

class Robot
{
    const MIN_ALPHA = 65;
    const MAX_ALPHA = 90;
    const MIN_DIGIT = 0;
    const MAX_DIGIT = 999;
    private $name = "";
    private static $nameHistory = [];

    public function __construct() {
        $this->reset();
    }

    public function getName(): string {
        return $this->name;
    }

    public function reset(): void {
        $newName = $this->getNewRandomName();
        while(in_array($newName, self::$nameHistory)) { // while generated new name is in array, create new one
            $newName = $this->getNewRandomName();
        }
        array_push(self::$nameHistory,  $newName);
        $this->name = $newName;
    }

    private function getNewRandomName(): string {
        return "{$this->getRandomString()}{$this->getRandomNumber()}";
    }

    private function getRandomNumber(): string {
        return str_pad(rand(self::MIN_DIGIT, self::MAX_DIGIT), 3, '0', STR_PAD_LEFT);
    }

    private function getRandomString(): string {
        return chr(rand(self::MIN_ALPHA, self::MAX_ALPHA)) . chr(rand(self::MIN_ALPHA, self::MAX_ALPHA));
    }
}
