<?php namespace Anomaly\VariablesModule\Variable;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;

/**
 * Class VariableRepository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable
 */
class VariableRepository extends EntryRepository implements VariableRepositoryInterface
{

    /**
     * The variables collection.
     *
     * @var VariableCollection
     */
    protected $variables;

    /**
     * Create a new VariableRepository instance.
     *
     * @param VariableCollection        $variables
     * @param StreamRepositoryInterface $streams
     */
    public function __construct(VariableCollection $variables, StreamRepositoryInterface $streams)
    {
        $this->variables = $variables->make($streams->findAllByNamespace('variables')->all());
    }

    /**
     * Get a variable.
     *
     * @param $group
     * @param $field
     * @return FieldTypePresenter
     */
    public function get($group, $field)
    {
        if (!$group = $this->group($group)) {
            return null;
        }

        return $group->{$field};
    }

    /**
     * Get a variable group.
     *
     * @param $group
     * @return EntryInterface
     */
    public function group($group)
    {
        return $this->variables->get($group);
    }
}
