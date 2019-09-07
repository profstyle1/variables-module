<?php namespace Anomaly\VariablesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;
use Anomaly\Streams\Platform\Assignment\Contract\AssignmentRepositoryInterface;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;

/**
 * Class VariablesModule
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
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

            ],
        ],
        'groups'    => [
            'buttons'  => [
                'new_group',
            ],
            'sections' => [
                'assignments' => [
                    'hidden'  => true,
                    'href'    => 'admin/variables/groups/assignments/{request.route.parameters.stream}',
                    'buttons' => [
                        'assign_fields' => [
                            'data-toggle' => 'modal',
                            'data-target' => '#modal',
                            'href'        => 'admin/variables/groups/assignments/{request.route.parameters.stream}/choose',
                        ],
                    ],
                ],
            ],
        ],
        'fields'    => [
            'buttons' => [
                'new_field' => [
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'href'        => 'admin/variables/fields/choose',
                ],
            ],
        ],
    ];

    /**
     * Fired after uninstalled.
     *
     * @param AssignmentRepositoryInterface $assignments
     * @param StreamRepositoryInterface $streams
     * @param FieldRepositoryInterface $fields
     */
    public function onUninstalled(
        AssignmentRepositoryInterface $assignments,
        StreamRepositoryInterface $streams,
        FieldRepositoryInterface $fields
    ) {
        $streams->destroy('variables');

        $assignments->cleanup();
        $streams->cleanup();
        $fields->cleanup();
    }
}
