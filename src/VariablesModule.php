<?php namespace Anomaly\VariablesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class VariablesModule
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule
 */
class VariablesModule extends Module
{

    /**
     * The addon code.
     *
     * @var string
     */
    protected $icon = 'code';

    /**
     * The addon sections.
     *
     * @var array
     */
    protected $sections = [
        'variables' => [
            'buttons' => [
                'new_variable'
            ]
        ]
    ];

}
