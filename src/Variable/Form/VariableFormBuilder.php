<?php namespace Anomaly\VariablesModule\Variable\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class VariableFormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Variable\Form
 */
class VariableFormBuilder extends FormBuilder
{

    /**
     * Get the contextual entry ID.
     *
     * @return int|null
     */
    public function getContextualId()
    {
        $stream = $this->getFormStream();

        return $stream->getId();
    }
}
