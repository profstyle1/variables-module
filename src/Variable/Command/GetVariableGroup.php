<?php namespace Anomaly\VariablesModule\Variable\Command;

use Anomaly\Streams\Platform\Entry\EntryModel;
use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class GetVariableGroup
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable\Command
 */
class GetVariableGroup implements SelfHandling
{

    /**
     * The variable group.
     *
     * @var string
     */
    protected $group;

    /**
     * Create a new GetVariableGroup instance.
     *
     * @param $group
     */
    public function __construct($group)
    {
        $this->group = $group;
    }

    /**
     * Handle the command.
     *
     * @param VariableRepositoryInterface $variables
     * @return EntryModel
     */
    public function handle(VariableRepositoryInterface $variables)
    {
        return $variables->group($this->group);
    }
}
