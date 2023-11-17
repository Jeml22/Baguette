<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PedidosFixture
 */
class PedidosFixture extends TestFixture
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
                'id_pedido' => 1,
                'nom_producto' => 'Lorem ipsum dolor sit amet',
                'cantidad' => 1,
                'estado' => 'Lorem ipsum dolor sit amet',
                'estado_producto' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
