<?php namespace Anomaly\VariablesModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeCollection;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\VariablesModule\Variable\Field\Form\VariableFieldFormBuilder;
use Anomaly\VariablesModule\Variable\Field\Table\VariableFieldTableBuilder;
use Anomaly\VariablesModule\Variable\Form\VariableFormBuilder;

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
     * Return an index of existing variable fields.
     *
     * @param VariableFieldTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(VariableFieldTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return the modal for choosing a field type.
     *
     * @param FieldTypeCollection $fieldTypes
     * @return \Illuminate\View\View
     */
    public function choose(FieldTypeCollection $fieldTypes)
    {
        return view('module::ajax/choose_field_type', ['field_types' => $fieldTypes->all()]);
    }

    /**
     * Return the form for creating a new variable field.
     *
     * @param VariableFieldFormBuilder $form
     * @param FieldTypeCollection      $fieldTypes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(VariableFieldFormBuilder $form, FieldTypeCollection $fieldTypes)
    {
        $form->setFieldType($fieldTypes->get($_GET['field_type']));

        return $form->render();
    }

    /**
     * Return the form for editing a variable field.
     *
     * @param VariableFieldFormBuilder $form
     * @param                          $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(VariableFieldFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    /**
     * Return the form for setting a variable value.
     *
     * @param VariableFormBuilder $form
     * @param                     $field
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function set(VariableFormBuilder $form, $field)
    {
        return $form->setFields([$field])->render();
    }
}
