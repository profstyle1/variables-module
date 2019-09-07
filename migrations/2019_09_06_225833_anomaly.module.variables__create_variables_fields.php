<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleVariablesCreateVariablesFields
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleVariablesCreateVariablesFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'email' => [
            'type'   => 'anomaly.field_type.email',
            'locked' => 0, // Used with seeded variables.
            'en'     => [
                'name'         => 'Contact Email',
                'instructions' => 'What is the main contact email to display?',
            ],
        ],
    ];
}
