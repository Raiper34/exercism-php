<?php

class Bob
{

    function respondTo(string $sentence): string
    {
        if ($this->isYellingQuestion($sentence)) {
            return "Calm down, I know what I'm doing!";
        } else if ($this->isQuestion($sentence)) {
            return "Sure.";
        } else if ($this->isYelling($sentence)) {
            return "Whoa, chill out!";
        } else if ($this->isSayingNothing($sentence)) {
            return "Fine. Be that way!";
        }
        return "Whatever.";
    }

    private static function isSayingNothing(string $sentence): bool {
        return trim($sentence) === "";
    }

    private static function isYelling(string $sentence): bool {
        return strtoupper($sentence) === $sentence && strtoupper($sentence) !== strtolower($sentence);
    }

    private static function isQuestion(string $sentence): bool {
        return substr(trim($sentence), -1) === "?";
    }

    private function isYellingQuestion(string $sentence): bool {
        return $this->isQuestion($sentence) && $this->isYelling($sentence);
    }

}