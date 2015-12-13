<?php namespace Anomaly\VariablesModule\Variable\Command;

use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class GetVariableValue
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable\Command
 */
class GetVariableValue implements SelfHandling
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
     * Create a new GetVariableValue instance.
     *
     * @param      $group
     * @param      $field
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
        if (!$group = $variables->group($this->group)) {
            return null;
        }

        return $group->getAttribute($this->field);
    }
}
