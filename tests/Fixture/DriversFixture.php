<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DriversFixture
 */
class DriversFixture extends TestFixture
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
                'driver_name' => 'Lorem ipsum dolor sit amet',
                'licence_no' => 'Lorem ipsum dolor sit amet',
                'age' => 1,
                'photo' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'created' => '2022-10-07 21:21:25',
                'modified' => '2022-10-07 21:21:25',
            ],
        ];
        parent::init();
    }
}
