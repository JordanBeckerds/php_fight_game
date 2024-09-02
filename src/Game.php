<?php
require("InputParser.php");
require("Battle.php");
require("Player.php");
class Game
{
    private $playerA;
    private $playerB;

    public function __construct($input)
    {
        list($this->playerA, $this->playerB) = InputParser::parse($input);
    }

    public function run()
    {
        $battle = new Battle($this->playerA, $this->playerB);
        $battle->fight();
    }
}