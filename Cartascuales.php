<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class CartasTest extends TestCase
{
    public function testMazoValido()
    {
        $figuras_totales = [];

        $mazo = [[]];

        $this->assertEquals(55,count($mazo));

        foreach($mazo as $carta)
        {

        $this->assertEquals(8,count($carta));

        $this->assertEquals(count(array_unique($carta)),count($carta));

        $figuras_totales += $carta;

        }

        $this->assertEquals(57,count(array_unique($figuras_totales)));

    }
    

}
?>
