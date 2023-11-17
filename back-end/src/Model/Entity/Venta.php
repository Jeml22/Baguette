<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venta Entity
 *
 * @property int $id_venta
 * @property \Cake\I18n\FrozenDate $fecha
 * @property \Cake\I18n\Time $hora
 * @property string $productos
 * @property int $cantidad
 * @property string $total
 * @property string $idfactura
 */
class Venta extends Entity
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
        'fecha' => true,
        'hora' => true,
        'productos' => true,
        'cantidad' => true,
        'total' => true,
        'idfactura' => true,
    ];
}
