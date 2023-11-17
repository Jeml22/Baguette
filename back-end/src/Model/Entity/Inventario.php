<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inventario Entity
 *
 * @property int $id_referencia
 * @property int $cantidad_inicial
 * @property int $cantidad_disponible
 */
class Inventario extends Entity
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
        'cantidad_inicial' => true,
        'cantidad_disponible' => true,
    ];
}
