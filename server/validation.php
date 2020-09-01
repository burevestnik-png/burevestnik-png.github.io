<?php

const X_MIN = -4, X_MAX = 4;
const Y_MIN = -3, Y_MAX = 3;
const R_MIN = 1, R_MAX = 5;

function isValid($x, $y, $r)
{
    if (!is_double($r) || !is_double($y) || !is_double($x)) {
        return false;
    }

    if ($x < X_MIN || $x > X_MAX ||
        $y < Y_MIN || $y > Y_MAX ||
        $r < R_MIN || $r > R_MAX) {
        return false;
    }

    return true;
}

function isHit($x, $y, $r)
{
    return isYellowZone($x, $y, $r) || isBlueZone($x, $y, $r) || isGreenZone($x, $y, $r);
}

function isYellowZone($x, $y, $r)
{
    return $x >= - $r / 2 && $x <= 0 && $y >= 0 && $y <= $r;
}

function isBlueZone($x, $y, $r)
{
    return $x >= 0 && $x <= $r && $y >= 0 && $y <= ($r - $x);
}

function isGreenZone($x, $y, $r)
{
    return $x <= 0 && $y <= 0 && sqrt($x ** 2 + $y ** 2) < $r / 2;
}
