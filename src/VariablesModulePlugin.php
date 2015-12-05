<?php namespace Anomaly\VariablesModule;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Anomaly\VariablesModule\Variable\Command\GetVariableValue;

/**
 * Class VariablesModulePlugin
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule
 */
class VariablesModulePlugin extends Plugin
{

    /**
     * Get the functions.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction(
                'variable_value',
                function ($group, $field) {
                    return $this->dispatch(new GetVariableValue($group, $field));
                }
            )
        ];
    }
}
