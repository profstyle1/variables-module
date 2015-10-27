<?php namespace Anomaly\VariablesModule\Variable\Plugin;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Anomaly\VariablesModule\Variable\Plugin\Command\GetVariable;

/**
 * Class VariablePlugin
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable\Plugin
 */
class VariablePlugin extends Plugin
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
                'variable',
                function ($group, $field) {
                    return $this->dispatch(new GetVariable($group, $field));
                }
            )
        ];
    }
}
