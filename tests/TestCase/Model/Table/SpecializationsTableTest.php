<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpecializationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpecializationsTable Test Case
 */
class SpecializationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SpecializationsTable
     */
    protected $Specializations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Specializations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Specializations') ? [] : ['className' => SpecializationsTable::class];
        $this->Specializations = $this->getTableLocator()->get('Specializations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Specializations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SpecializationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
