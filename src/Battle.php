<?php
class Battle
{
    private $playerA;
    private $playerB;

    public function __construct(Player $playerA, Player $playerB)
    {
        $this->playerA = $playerA;
        $this->playerB = $playerB;
    }

    public function fight()
    {
        while ($this->playerA->isAlive() && $this->playerB->isAlive()) {
            $this->playerA->attack($this->playerB);
            if ($this->playerB->isAlive()) {
                $this->playerB->attack($this->playerA);
            }
            echo  "</br>". $this->playerA->getHealth() . " " . $this->playerB->getHealth() . "";
        }

        $this->declareWinner();
    }

    private function declareWinner()
    {
        if ($this->playerA->isAlive()) {
            echo "</br>". $this->playerA->getName() . " " . $this->playerA->getHealth() ;
        } else {
            echo "</br>". $this->playerB->getName() . " " . $this->playerB->getHealth() ;
        }
    }
}