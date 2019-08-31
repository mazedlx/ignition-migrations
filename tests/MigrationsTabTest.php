<?php
namespace Facade\IgnitionTinkerTab\Tests;

use PHPUnit\Framework\TestCase;
use Mazedlx\MigrationsTab;
use Mazedlx\MigrationsTab\Tab;

class MigrationsTabTest extends TestCase
{
    /** @test */
    public function it_can_return_the_tab_name()
    {
        $tab = new Tab;
        $this->assertEquals('Migrations', $tab->name());
    }
}
