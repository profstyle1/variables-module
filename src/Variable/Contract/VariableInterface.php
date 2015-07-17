<?php namespace Anomaly\VariablesModule\Variable\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface VariableInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable\Contract
 */
interface VariableInterface extends EntryInterface
{

    /**
     * Return the first entry or a new one.
     *
     * @param array $attributes
     * @return VariableInterface
     */
    static public function firstOrNew(array $attributes);
}
