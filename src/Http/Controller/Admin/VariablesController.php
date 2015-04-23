<?php namespace Anomaly\VariablesModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\VariablesModule\Variable\Form\VariableFieldAssignmentFormBuilder;
use Anomaly\VariablesModule\Variable\Table\VariableAssignmentTableBuilder;

/**
 * Class VariablesController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule\Http\Controller\Admin
 */
class VariablesController extends AdminController
{

    /**
     * Return an index of variable assignments.
     *
     * @param VariableAssignmentTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(VariableAssignmentTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return the form for a new variable field assignment.
     *
     * @param VariableFieldAssignmentFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(VariableFieldAssignmentFormBuilder $form)
    {
        return $form->render();
    }
}
