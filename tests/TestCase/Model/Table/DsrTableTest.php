<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DsrTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DsrTable Test Case
 */
class DsrTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DsrTable
     */
    protected $Dsr;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Dsr',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Dsr') ? [] : ['className' => DsrTable::class];
        $this->Dsr = $this->getTableLocator()->get('Dsr', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Dsr);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DsrTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
