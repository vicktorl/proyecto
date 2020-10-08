<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require 'calificacionLuthier.php'; 

final class calificacionTest extends TestCase

{ 	/** @test */
	public function prueba_promedio_() {
        $calificacion = new calificacion();
        $this->assertEquals('2.5', $calificacion->promedio(5,2));
    }
    /** @test */
	public function prueba_promedio_nulo() {
        $calificacion = new calificacion();
        $this->assertNull($calificacion->promedio(0,0));
    }
   /** @test */
	public function prueba_suma_calificaciones() {
        $calificacion = new calificacion();
        $this->assertEquals('10',$calificacion->luthier_bajo());
    }
}