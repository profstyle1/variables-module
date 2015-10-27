<?php namespace Anomaly\VariablesModule\Variable\Plugin\Command;

use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class GetVariable
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable\Plugin\Command
 */
class GetVariable implements SelfHandling
{

    /**
     * The variable group.
     *
     * @var string
     */
    protected $group;

    /**
     * The variable field.
     *
     * @var string
     */
    protected $field;

    /**
     * Create a new GetVariable instance.
     *
     * @param $group
     * @param $field
     */
    public function __construct($group, $field)
    {
        $this->group = $group;
        $this->field = $field;
    }

    /**
     * Handle the command.
     *
     * @param VariableRepositoryInterface $variables
     * @return mixed
     */
    public function handle(VariableRepositoryInterface $variables)
    {
        return $variables->group($this->group)->getFieldTypePresenter($this->field);
    }
}
