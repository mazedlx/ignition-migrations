<?php
namespace Facade\IgnitionTinkerTab\Tests;

use Mazedlx\MigrationsTab\MigrationsTab;
use PHPUnit\Framework\TestCase;

class MigrationsTabTest extends TestCase
{
    /** @test */
    public function it_can_return_the_tab_name()
    {
        $tab = new MigrationsTab;
        $this->assertEquals('Migrations', $tab->name());
    }
}
