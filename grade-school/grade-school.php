<?php

class School {

    private $studentGrades = [];

    public function add(string $name, int $grade): void {
        if (!array_key_exists($grade , $this->studentGrades)) {
            $this->studentGrades[$grade] = [];
        }
        $this->studentGrades[$grade][] = $name;
    }

    public function grade(int $grade): Array {
        return $this->studentGrades[$grade] ?? [];
    }

    public function studentsByGradeAlphabetical(): Array {
        ksort($this->studentGrades);
        foreach ($this->studentGrades as $key => $value) {
            sort($value);
            $this->studentGrades[$key] = $value;
        }
        return $this->studentGrades;
    }


}
