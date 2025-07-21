<?php

function TriangleArea($base, $height)
{
  return $base * $height / 2;
}
function SquareArea($base, $height)
{
  return $base * $height;
}
function TrapezoidArea($upper_base, $lower_base, $height)
{
  return ($upper_base + $lower_base) * $height / 2;
}

echo TriangleArea(7, 8) . "<br>";
echo SquareArea(5, 5) . "<br>";
echo TrapezoidArea(4, 5, 4);