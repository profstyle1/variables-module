<?php namespace Anomaly\VariablesModule\Variable\Contract;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;
use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

/**
 * Interface VariableRepositoryInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable\Contract
 */
interface VariableRepositoryInterface extends EntryRepositoryInterface
{

    /**
     * Get a variable.
     *
     * @param $group
     * @param $field
     * @return FieldTypePresenter
     */
    public function get($group, $field);
}
