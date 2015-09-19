<?php namespace Anomaly\VariablesModule\Group\Form;

use Anomaly\Streams\Platform\Stream\Form\StreamFormBuilder;

/**
 * Class GroupFormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
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
