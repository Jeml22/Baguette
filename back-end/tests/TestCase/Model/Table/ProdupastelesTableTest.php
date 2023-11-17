<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdupastelesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdupastelesTable Test Case
 */
class ProdupastelesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdupastelesTable
     */
    protected $Produpasteles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Produpasteles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Produpasteles') ? [] : ['className' => ProdupastelesTable::class];
        $this->Produpasteles = $this->getTableLocator()->get('Produpasteles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Produpasteles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProdupastelesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
