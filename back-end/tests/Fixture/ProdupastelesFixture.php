<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdupastelesFixture
 */
class ProdupastelesFixture extends TestFixture
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
                'id_producto' => 1,
                'precio' => 1.5,
                'cantidad_disponible' => 1,
                'nombre_p' => 'Lorem ipsum dolor sit amet',
                'tipo_prod' => 'Lorem ipsum dolor sit amet',
                'peso' => 1,
                'descripcion' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
