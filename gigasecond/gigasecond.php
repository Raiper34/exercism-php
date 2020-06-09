<?php

const GIGASECOND = 1000000000;

function from(DateTime $date) {
    return (clone $date)->setTimestamp($date->getTimestamp() + GIGASECOND);
}
