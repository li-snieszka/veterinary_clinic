<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServicesTypeFixture
 */
class ServicesTypeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'services_type';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_type' => 1,
                'name' => 'Lorem ipsum dolor ',
                'price' => 1.5,
            ],
        ];
        parent::init();
    }
}
