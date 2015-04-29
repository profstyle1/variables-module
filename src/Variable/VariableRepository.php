<?php namespace Anomaly\VariablesModule\Variable;

use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;
use Robbo\Presenter\Decorator;

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
     * @param Decorator     $decorator
     */
    public function __construct(VariableModel $model, Decorator $decorator)
    {
        $this->model = $decorator->decorate($model->firstOrNew([]));
    }

    /**
     * Get a variable value.
     *
     * @param      $key
     * @param null $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if ($value = $this->model->{$key}) {
            return $value;
        }

        return $default;
    }
}
