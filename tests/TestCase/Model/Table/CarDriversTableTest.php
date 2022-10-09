<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CardriversTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CardriversTable Test Case
 */
class CardriversTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CardriversTable
     */
    protected $Cardrivers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Cardrivers',
        'app.Cars',
        'app.Drivers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cardrivers') ? [] : ['className' => CardriversTable::class];
        $this->Cardrivers = $this->getTableLocator()->get('Cardrivers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Cardrivers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CardriversTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CardriversTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
