<?php namespace Anomaly\VariablesModule\Variable;

use Anomaly\Streams\Platform\Entry\EntryCollection;
use Anomaly\Streams\Platform\Stream\Contract\StreamInterface;

/**
 * Class VariableCollection
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable
 */
class VariableCollection extends EntryCollection
{

    /**
     * Create a new VariableCollection instance.
     *
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        /* @var StreamInterface $item */
        foreach ($items as $item) {
            $this->items[$item->getSlug()] = $item->getEntryModel()->firstOrNew([]);
        }
    }
}
