<?php namespace Anomaly\VariablesModule\Variable\Command;

use Anomaly\Streams\Platform\Support\Decorator;
use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;
use Anomaly\VariablesModule\Variable\VariablePresenter;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class GetValuePresenter
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable\Command
 */
class GetValuePresenter implements SelfHandling
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
     * Create a new GetValuePresenter instance.
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
     * @return VariablePresenter
     */
    public function handle(VariableRepositoryInterface $variables)
    {
        if (!$group = $variables->group($this->group)) {
            return null;
        }

        return (new Decorator())->decorate($group)->{$this->field};
    }
}
