<?php namespace Anomaly\VariablesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class VariablesModule
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
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

            ]
        ],
        'groups'    => [
            'buttons' => [
                'new_group',
                'assign_fields' => [
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'enabled'     => 'admin/variables/groups/assignments/*',
                    'href'        => 'admin/variables/groups/choose/{request.route.parameters.id}'
                ]
            ]
        ],
        'fields'    => [
            'buttons' => [
                'new_field' => [
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'href'        => 'admin/variables/fields/choose'
                ]
            ]
        ]
    ];

}
