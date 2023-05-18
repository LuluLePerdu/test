<?php


use PHPUnit\Framework\TestCase;

class TotoTest extends TestCase
{

    private Toto $toto;

    public function setup():void{
        $toto = new Toto();
    }
    public function teardown():void{
        $this->toto = null;
    }

    public static function addProvider():array{
        return [
            [0,0,0],
            [1,2,3],
            [99,-99,0]
        ];
    }

    public function testAdd(int $nb1, int $nb2, int $attendu)
    {

        $toto = new Toto();

        $resultat = $toto->add($nb1, $nb2);

        $this->assertEquals($attendu, $resultat);

    }
    /** @test */
    public function testAverage()
    {
        $stub = $this->getMockBuilder(Toto::class) //herite
        ->onlyMethods(['add']) //redefinis la methode
        ->getMock();
        $stub->method('add')->willReturn(4);

        $resultatAttendu = 2;
        $resultatObtenu = $stub->average(2,2);

        $this->assertEquals($resultatAttendu, $resultatObtenu);
    }
}
