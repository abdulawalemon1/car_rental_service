<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cardriver Entity
 *
 * @property int $id
 * @property int $car_id
 * @property int $driver_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool|null $status
 *
 * @property \App\Model\Entity\Car $car
 * @property \App\Model\Entity\Driver $driver
 */
class Cardriver extends Entity
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
        'car_id' => true,
        'driver_id' => true,
        'created' => true,
        'modified' => true,
        'status' => true,
        'car' => true,
        'driver' => true,
    ];
}
