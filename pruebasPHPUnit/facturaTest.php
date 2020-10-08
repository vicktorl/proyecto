<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require 'facturausuario.php'; 

final class facturaTest extends TestCase
{	/** @test */
	public function prueba_usuario_tiene_factura() {
        $usuario = new cliente();
        $this->assertNull(
         $usuario->
         factura("sebastian","asfklk"));
    }
}
?>