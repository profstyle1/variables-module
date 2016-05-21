<?php namespace Anomaly\VariablesModule\Group\Table;

use Anomaly\Streams\Platform\Stream\Table\StreamTableBuilder;

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
     * The table buttons.
     *
     * @var array
     */
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
