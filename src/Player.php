<?php
class Player
{
    private $name;
    private $health;
    private $attack;
    private $defense;

    public function __construct($name, $health, $attack, $defense)
    {
        $this->name = $name;
        $this->health = (int)$health;
        $this->attack = (int)$attack;
        $this->defense = (int)$defense;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function isAlive()
    {
        return $this->health > 0;
    }

    public function takeDamage($damage)
    {
        $this->health -= max(0, $damage);
    }

    public function attack(Player $opponent)
    {
        $damage = $this->attack - $opponent->defense;
        $opponent->takeDamage($damage);
    }
}
?>