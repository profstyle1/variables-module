<?php namespace Anomaly\VariablesModule\Variable\Contract;

/**
 * Interface VariableRepositoryInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable\Contract
 */
interface VariableRepositoryInterface
{

    /**
     * Get a variable value.
     *
     * @param      $key
     * @param null $default
     * @return mixed
     */
    public function get($key, $default = null);
}
