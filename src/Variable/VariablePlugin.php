<?php namespace Anomaly\VariablesModule\Variable;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;

/**
 * Class VariablePlugin
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable
 */
class VariablePlugin extends Plugin
{

    /**
     * The variable repository.
     *
     * @var VariableRepositoryInterface
     */
    protected $repository;

    /**
     * Create a new VariablePlugin instance.
     *
     * @param VariableRepositoryInterface $repository
     */
    function __construct(VariableRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get the plugin functions.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('variables_get', [$this->repository, 'get'])
        ];
    }
}
