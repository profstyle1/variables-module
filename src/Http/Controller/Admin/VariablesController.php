<?php namespace Anomaly\VariablesModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\VariablesModule\Variable\Table\VariableTableBuilder;

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
     * Return an index of existing variables.
     *
     * @param VariableTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(VariableTableBuilder $table)
    {
        return $table->render();
    }
}
