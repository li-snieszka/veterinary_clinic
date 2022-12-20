<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicesTypeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicesTypeTable Test Case
 */
class ServicesTypeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicesTypeTable
     */
    protected $ServicesType;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ServicesType',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ServicesType') ? [] : ['className' => ServicesTypeTable::class];
        $this->ServicesType = $this->getTableLocator()->get('ServicesType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ServicesType);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ServicesTypeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
