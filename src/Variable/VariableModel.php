<?php namespace Anomaly\VariablesModule\Variable;

use Anomaly\Streams\Platform\Model\Variables\VariablesVariablesEntryModel;
use Anomaly\VariablesModule\Variable\Contract\VariableInterface;

/**
 * Class VariableModel
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable
 */
class VariableModel extends VariablesVariablesEntryModel implements VariableInterface
{

    /**
     * The cache minutes.
     *
     * @var int
     */
    protected $cacheMinutes = 99999;

}
