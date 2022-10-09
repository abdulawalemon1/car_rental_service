<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarsFixture
 */
class CarsFixture extends TestFixture
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
                'car_reg_no' => 'Lorem ipsum dolor sit amet',
                'car_num_plate' => 'Lorem ipsum dolor sit amet',
                'car_model' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'created' => '2022-10-07 21:19:28',
                'modified' => '2022-10-07 21:19:28',
            ],
        ];
        parent::init();
    }
}
