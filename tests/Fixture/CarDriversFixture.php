<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CardriversFixture
 */
class CardriversFixture extends TestFixture
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
                'car_id' => 1,
                'driver_id' => 1,
                'created' => '2022-10-08 13:02:13',
                'modified' => '2022-10-08 13:02:13',
                'status' => 1,
            ],
        ];
        parent::init();
    }
}
