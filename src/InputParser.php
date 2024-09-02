<?php
class InputParser
{
    public static function parse($input)
    {
        $lines = explode("\n", trim($input));
        $playerAData = explode(" ", trim($lines[0]));
        $playerBData = explode(" ", trim($lines[1]));

        $playerA = new Player($playerAData[0], $playerAData[1], $playerAData[2], $playerAData[3]);
        $playerB = new Player($playerBData[0], $playerBData[1], $playerBData[2], $playerBData[3]);

        return [$playerA, $playerB];
    }
}
?>