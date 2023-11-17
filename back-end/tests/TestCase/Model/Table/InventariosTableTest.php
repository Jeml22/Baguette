<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InventariosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InventariosTable Test Case
 */
class InventariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InventariosTable
     */
    protected $Inventarios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Inventarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Inventarios') ? [] : ['className' => InventariosTable::class];
        $this->Inventarios = $this->getTableLocator()->get('Inventarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Inventarios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InventariosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
