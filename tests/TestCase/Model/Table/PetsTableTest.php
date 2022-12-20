<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PetsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PetsTable Test Case
 */
class PetsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PetsTable
     */
    protected $Pets;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pets',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pets') ? [] : ['className' => PetsTable::class];
        $this->Pets = $this->getTableLocator()->get('Pets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pets);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PetsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
