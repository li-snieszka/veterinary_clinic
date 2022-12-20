<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientsFixture
 */
class ClientsFixture extends TestFixture
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
                'id_client' => 1,
                'name' => 'Lorem ipsum dolor ',
                'surname' => 'Lorem ipsum dolor ',
                'pesel' => 1.5,
                'phone' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
