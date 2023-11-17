<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InventariosFixture
 */
class InventariosFixture extends TestFixture
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
                'id_referencia' => 1,
                'cantidad_inicial' => 1,
                'cantidad_disponible' => 1,
            ],
        ];
        parent::init();
    }
}
