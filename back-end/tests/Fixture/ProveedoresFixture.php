<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProveedoresFixture
 */
class ProveedoresFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_proveedor' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'Producto_proveedor' => 'Lorem ipsum dolor sit amet',
                'numero_de_contacto' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
