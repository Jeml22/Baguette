<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VentasFixture
 */
class VentasFixture extends TestFixture
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
                'id_venta' => 1,
                'fecha' => '2023-09-14',
                'hora' => '15:07:53',
                'productos' => 'Lorem ipsum dolor sit amet',
                'cantidad' => 1,
                'total' => 1.5,
                'idfactura' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
