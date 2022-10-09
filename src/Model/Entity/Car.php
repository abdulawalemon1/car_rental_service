<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Car Entity
 *
 * @property int $id
 * @property string $car_reg_no
 * @property string $car_num_plate
 * @property string $car_model
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\CarDriver[] $car_drivers
 */
class Car extends Entity
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
        'car_reg_no' => true,
        'car_num_plate' => true,
        'car_model' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'car_drivers' => true,
    ];
}
