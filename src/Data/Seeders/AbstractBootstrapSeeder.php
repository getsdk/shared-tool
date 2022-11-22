<?php
declare(strict_types=1);

namespace GetSDK\Shared\Tool\Data\Seeders;

use Illuminate\Database\Seeder as AbstractLaravelSeeder;

/**
 * AbstractBootstrapSeeder
 *
 * @author bu0nq <hello@bu0nq.ru>
 */
abstract class AbstractBootstrapSeeder extends AbstractLaravelSeeder
{
    /**
     * @return void
     */
    abstract public function run() : void;
}
