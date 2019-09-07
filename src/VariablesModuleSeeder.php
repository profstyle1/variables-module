<?php namespace Anomaly\VariablesModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Anomaly\VariablesModule\Group\GroupSeeder;
use Anomaly\VariablesModule\Variable\VariableSeeder;

/**
 * Class VariablesModuleSeeder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class VariablesModuleSeeder extends Seeder
{

    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->call(GroupSeeder::class);
        $this->call(VariableSeeder::class);
    }
}
