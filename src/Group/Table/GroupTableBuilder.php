<?php namespace Anomaly\VariablesModule\Group\Table;

use Anomaly\Streams\Platform\Stream\Table\StreamTableBuilder;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class GroupTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\VariablesModule\Group\Table
 */
class GroupTableBuilder extends StreamTableBuilder
{

    /**
     * The streams namespace.
     *
     * @var string
     */
    protected $namespace = 'variables';

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        [
            'heading' => 'module::field.group.name',
            'value'   => 'entry.name'
        ],
        [
            'heading' => 'module::field.slug.name',
            'value'   => 'entry.slug'
        ],
        [
            'heading' => 'streams::field.description.name',
            'value'   => 'entry.description'
        ]
    ];

    protected $buttons = [
        'edit',
        'assignments'
    ];

    /**
     * The table actions.
     *
     * @var array
     */
    protected $actions = [
        'delete'
    ];
}
