<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdupanesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdupanesTable Test Case
 */
class ProdupanesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdupanesTable
     */
    protected $Produpanes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Produpanes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Produpanes') ? [] : ['className' => ProdupanesTable::class];
        $this->Produpanes = $this->getTableLocator()->get('Produpanes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Produpanes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProdupanesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
