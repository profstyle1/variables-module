<?php namespace Anomaly\VariablesModule\Variable;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Anomaly\Streams\Platform\Model\Variables\VariablesExamplesEntryModel;

/**
 * Class VariableSeeder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class VariableSeeder extends Seeder
{

    /**
     * Run the seeder.
     */
    public function run()
    {
        VariablesExamplesEntryModel::create(
            [
                'email' => 'demo@example.com',
            ]
        );
    }
}
