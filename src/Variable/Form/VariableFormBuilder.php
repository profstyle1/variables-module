<?php namespace Anomaly\VariablesModule\Variable\Form;

use Anomaly\Streams\Platform\Ui\Form\Form;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use Anomaly\VariablesModule\Variable\VariableModel;

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
     * Create a new VariableFormBuilder instance.
     *
     * @param Form          $form
     * @param VariableModel $model
     */
    public function __construct(Form $form, VariableModel $model)
    {
        $this->setEntry($model->firstOrNew([])->getId());

        parent::__construct($form);
    }
}
