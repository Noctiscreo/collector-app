<?php

use PHPUnit\Framework\TestCase;

require('../collector-function.php');

class FunctionTest extends TestCase
{
    public function testMonsterDisplay()
    {
        $monsters = [['Name' => 'Strahd', 'Weapon' => 'Broadsword', 'Challenge' => 20]];
        $result = monsterDisplay($monsters);
        $expected = '<div><h3>Name: Strahd</h3><p>Weapon: Broadsword</p><p>Challenge: 20</p></div>';

        $this->assertEquals($expected, $result);
    }
}
