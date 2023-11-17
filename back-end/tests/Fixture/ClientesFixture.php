<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientesFixture
 */
class ClientesFixture extends TestFixture
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
                'id' => 1,
                'tdoc' => 'Lorem ipsum dolor sit amet',
                'ndocu' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'fnaci' => 'Lorem ipsum dolor sit amet',
                'correo' => 'Lorem ipsum dolor sit amet',
                'direccion' => 'Lorem ipsum dolor sit amet',
                'numcont' => 'Lorem ipsum',
                'contra' => 'Lorem ips',
                'codigos' => 1,
                'role_id' => 1,
                'regisFecha' => '2023-08-23',
                'regisHora' => '12:40:07',
                'fechaContra' => '2023-08-23',
                'horaContra' => '12:40:07',
                'numeroTarjeta' => 1,
                'titularTarjeta' => 'Lorem ipsum dolor sit amet',
                'tarjetaDebito1' => 'Lorem',
                'tarjetaCredito2' => 'Lorem',
                'fechaVencimiento' => 1,
                'pinTarjeta' => 1,
                'correoElectronico' => 'Lorem ipsum dolor sit amet',
                'Cuenta' => 1,
                'Banco' => 1,
                'cuentaAhorros' => 1,
                'cuentaCorriente' => 1,
            ],
        ];
        parent::init();
    }
}
