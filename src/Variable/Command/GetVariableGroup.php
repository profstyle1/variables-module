<?php namespace Anomaly\VariablesModule\Variable\Command;

use Anomaly\Streams\Platform\Entry\EntryModel;
use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class GetVariableGroup
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
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
