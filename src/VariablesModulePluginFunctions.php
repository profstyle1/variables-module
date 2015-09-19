<?php namespace Anomaly\VariablesModule;

use Anomaly\Streams\Platform\Support\Decorator;
use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;

/**
 * Class VariablesModulePluginFunctions
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule
 */
class VariablesModulePluginFunctions
{

    /**
     * The variable repository.
     *
     * @var VariableRepositoryInterface
     */
    protected $variables;

    /**
     * The presenter decorator.
     *
     * @var Decorator
     */
    protected $decorator;

    /**
     * Create a new VariablesModulePluginFunctions instance.
     *
     * @param VariableRepositoryInterface $variables
     * @param Decorator                   $decorator
     */
    public function __construct(VariableRepositoryInterface $variables, Decorator $decorator)
    {
        $this->variables = $variables;
        $this->decorator = $decorator;
    }

    public function get($key)
    {
        list($group, $key) = explode('.', $key);

        return $this->decorator->decorate($this->variables->get($group));
    }
}
