<?php namespace Anomaly\VariablesModule;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Anomaly\Streams\Platform\Support\Decorator;
use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;

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
     * The presenter decorator.
     *
     * @var Decorator
     */
    protected $decorator;

    /**
     * The variable repository.
     *
     * @var VariableRepositoryInterface
     */
    protected $variables;

    /**
     * Create a new VariablesModulePlugin instance.
     *
     * @param Decorator                   $decorator
     * @param VariableRepositoryInterface $variables
     */
    public function __construct(Decorator $decorator, VariableRepositoryInterface $variables)
    {
        $this->decorator = $decorator;
        $this->variables = $variables;
    }

    /**
     * Get the functions.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction(
                'variables_get',
                function ($group, $field) {
                    return $this->decorator->decorate($this->variables->get($group, $field));
                }
            )
        ];
    }


}
