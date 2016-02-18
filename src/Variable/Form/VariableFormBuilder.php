<?php namespace Anomaly\VariablesModule\Variable\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class VariableFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
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
