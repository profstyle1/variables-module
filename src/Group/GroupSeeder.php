<?php namespace Anomaly\VariablesModule\Group;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class GroupSeeder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GroupSeeder extends Seeder
{

    /**
     * Run the seeder.
     */
    public function run()
    {
        $stream = $this->streams->create(
            [
                'namespace'   => 'variables',
                'slug'        => 'examples',
                'versionable' => true,
                'en'          => [
                    'name'        => 'Examples',
                    'description' => 'This is an example group.',
                ],
            ]
        );

        $this->assignments->create(
            [
                'translatable' => true,
                'stream'       => $stream,
                'field'        => $this->fields->findBySlugAndNamespace('email', 'variables'),
            ]
        );
    }
}
