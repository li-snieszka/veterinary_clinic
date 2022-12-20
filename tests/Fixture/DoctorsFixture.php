<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DoctorsFixture
 */
class DoctorsFixture extends TestFixture
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
                'id_doctor' => 1,
                'id_specialization' => 1,
                'name' => 'Lorem ipsum dolor ',
                'surname' => 'Lorem ipsum dolor ',
                'identity_code' => 'Lorem ipsum dolor ',
                'password' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
