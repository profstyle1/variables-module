<?php namespace Anomaly\VariablesModule\Variable;

use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;

/**
 * Class VariableRepository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable
 */
class VariableRepository implements VariableRepositoryInterface
{

    /**
     * The variable model.
     *
     * @var VariableModel
     */
    protected $model;

    /**
     * Create a new VariableRepository instance.
     *
     * @param VariableModel $model
     */
    public function __construct(VariableModel $model)
    {
        $this->model = $model;
    }
}
