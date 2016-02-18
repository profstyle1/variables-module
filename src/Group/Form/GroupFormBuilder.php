<?php namespace Anomaly\VariablesModule\Group\Form;

use Anomaly\Streams\Platform\Stream\Form\StreamFormBuilder;

/**
 * Class GroupFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\VariablesModule\Group\Form
 */
class GroupFormBuilder extends StreamFormBuilder
{

    /**
     * The stream prefix.
     *
     * @var string
     */
    protected $prefix = 'variables_';

    /**
     * The stream namespace.
     *
     * @var string
     */
    protected $namespace = 'variables';
}
