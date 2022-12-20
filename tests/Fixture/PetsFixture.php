<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PetsFixture
 */
class PetsFixture extends TestFixture
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
                'id_pet' => 1,
                'name' => 'Lorem ipsum dolor ',
                'weight' => 1.5,
                'age' => 1.5,
                'id_client' => 1,
                'id_genre' => 1,
            ],
        ];
        parent::init();
    }
}
