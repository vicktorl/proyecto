<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require 'pruebaUsuario.php'; 

final class usuarioTest extends TestCase
{ 	/** @test */
	public function prueba_nombre_usuario() {
        $usuario = new usuario();
        $this->assertEquals('juan', $usuario->mostrarUsuario(7));
    }
}
?>