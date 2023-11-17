<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $tdoc
 * @property int $ndocu
 * @property string $nombre
 * @property string $fnaci
 * @property string $correo
 * @property string $direccion
 * @property string $numcont
 * @property string $contra
 * @property int $codigos
 * @property int|null $role_id
 * @property \Cake\I18n\FrozenDate $regisFecha
 * @property \Cake\I18n\Time $regisHora
 * @property \Cake\I18n\FrozenDate $fechaContra
 * @property \Cake\I18n\Time $horaContra
 * @property int $numeroTarjeta
 * @property string $titularTarjeta
 * @property string $tarjetaDebito1
 * @property string $tarjetaCredito2
 * @property int $fechaVencimiento
 * @property int $pinTarjeta
 * @property string $correoElectronico
 * @property int $Cuenta
 * @property int $Banco
 * @property int $cuentaAhorros
 * @property int $cuentaCorriente
 */
class Cliente extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'tdoc' => true,
        'ndocu' => true,
        'nombre' => true,
        'fnaci' => true,
        'correo' => true,
        'direccion' => true,
        'numcont' => true,
        'contra' => true,
        'codigos' => true,
        'role_id' => true,
        'regisFecha' => true,
        'regisHora' => true,
        'fechaContra' => true,
        'horaContra' => true,
        'numeroTarjeta' => true,
        'titularTarjeta' => true,
        'tarjetaDebito1' => true,
        'tarjetaCredito2' => true,
        'fechaVencimiento' => true,
        'pinTarjeta' => true,
        'correoElectronico' => true,
        'Cuenta' => true,
        'Banco' => true,
        'cuentaAhorros' => true,
        'cuentaCorriente' => true,
    ];
}
