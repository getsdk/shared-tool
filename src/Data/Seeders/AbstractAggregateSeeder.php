<?php
declare(strict_types=1);

namespace GetSDK\Shared\Tool\Data\Seeders;

use Illuminate\Database\Seeder as AbstractLaravelSeeder;

/**
 * AbstractAggregateSeeder
 *
 * @author bu0nq <hello@bu0nq.ru>
 */
abstract class AbstractAggregateSeeder extends AbstractBootstrapSeeder
{
    /**
     * @var array
     */
    protected array $seeders = [];

    /**
     * @return void
     */
    public function run() : void
    {
        if (isset($this->seeders) && $this->seeders !== []) {
            $this->call($this->seeders);
        }
    }

    /**
     * @param array $seeders
     *
     * @return void
     */
    protected function mergeSeedersFrom(
        array $seeders
    ) : void {
        $this->seeders = array_merge(
            $this->seeders, $seeders
        );
    }
}
