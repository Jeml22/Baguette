<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProduotrosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProduotrosTable Test Case
 */
class ProduotrosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProduotrosTable
     */
    protected $Produotros;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Produotros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Produotros') ? [] : ['className' => ProduotrosTable::class];
        $this->Produotros = $this->getTableLocator()->get('Produotros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Produotros);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProduotrosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
