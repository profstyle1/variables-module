<?php namespace Anomaly\VariablesModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Assignment\Form\AssignmentFormBuilder;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Field\Form\FieldFormBuilder;
use Anomaly\Streams\Platform\Field\Table\FieldTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\VariablesModule\Variable\Form\VariableFormBuilder;
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

    public function index(FieldTableBuilder $table, VariableModel $model, FieldRepositoryInterface $fields)
    {
        return $table
            ->setStream($model->getStream())
            ->setButtons(
                [
                    'edit',
                    [
                        'button' => 'blue',
                        'text'   => 'Set Value',
                        'href'   => 'admin/variables/set/{entry.slug}'
                    ]
                ]
            )
            ->render();
    }

    public function create(FieldFormBuilder $form, VariableModel $model)
    {
        return $form->setStream($model->getStream())->render();
    }

    public function edit(FieldFormBuilder $form, VariableModel $model, $id)
    {
        return $form->setStream($model->getStream())->render($id);
    }

    public function assign(AssignmentFormBuilder $form, VariableModel $model, $id = null)
    {
        return $form->setStream($model->getStream())->render($id);
    }

    public function set(VariableFormBuilder $form, VariableModel $model, $field)
    {
        return $form->setFields([$field])->render($model->firstOrNew([])->getId());
    }
}
