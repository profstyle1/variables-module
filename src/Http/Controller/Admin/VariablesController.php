<?php namespace Anomaly\VariablesModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Assignment\Table\AssignmentTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\VariablesModule\Variable\VariableModel;

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
     * @param AssignmentTableBuilder $table
     * @param VariableModel          $model
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(AssignmentTableBuilder $table, VariableModel $model)
    {
        return $table->setStream($model->getStream())->render();
    }
}
