<?php namespace Anomaly\VariablesModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Assignment\Form\AssignmentFormBuilder;
use Anomaly\Streams\Platform\Assignment\Table\AssignmentTableBuilder;
use Anomaly\Streams\Platform\Field\Contract\FieldInterface;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Stream\Contract\StreamInterface;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
use Anomaly\Streams\Platform\Ui\Breadcrumb\BreadcrumbCollection;
use Anomaly\VariablesModule\Group\Form\GroupFormBuilder;
use Anomaly\VariablesModule\Group\Table\GroupTableBuilder;

/**
 * Class GroupsController
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\VariablesModule\Http\Controller\Admin
 */
class GroupsController extends AdminController
{

    /**
     * Return an index of existing entries.
     *
     * @param GroupTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(GroupTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return a form for a new page type.
     *
     * @param GroupFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(GroupFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return a form for editing an existing page type.
     *
     * @param GroupFormBuilder    $form
     * @param                     $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(GroupFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    /**
     * Return a table of existing page type assignments.
     *
     * @param AssignmentTableBuilder      $table
     * @param StreamRepositoryInterface   $groups
     * @param BreadcrumbCollection        $breadcrumbs
     * @param                             $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function fields(
        AssignmentTableBuilder $table,
        StreamRepositoryInterface $streams,
        BreadcrumbCollection $breadcrumbs,
        $id
    ) {
        /* @var StreamInterface $group */
        $group = $streams->find($id);

        $breadcrumbs->put($group->getName(), 'admin/variables/groups/edit/' . $group->getId());
        $breadcrumbs->put('streams::breadcrumb.assignments', 'admin/variables/groups/assignments/' . $group->getId());

        return $table
            ->setButtons(
                [
                    'edit' => [
                        'href' => '{request.path}/assignment/{entry.id}'
                    ]
                ]
            )
            ->setStream($group)
            ->render();
    }

    /**
     * Return the modal for choosing a field to assign.
     *
     * @param FieldRepositoryInterface $fields
     * @return \Illuminate\View\View
     */
    public function choose(FieldRepositoryInterface $fields, StreamRepositoryInterface $groups, $id)
    {
        /* @var StreamInterface $group */
        $group = $groups->find($id);

        return view(
            'module::ajax/choose_field',
            [
                'fields' => $fields->findAllByNamespace('variables')->notAssignedTo($group)->unlocked(),
                'id'     => $id
            ]
        );
    }

    /**
     * Return the assignment form for a variable.
     *
     * @param AssignmentFormBuilder     $form
     * @param StreamRepositoryInterface $streams
     * @param FieldRepositoryInterface  $fields
     * @param                           $id
     * @param                           $field
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function assign(
        AssignmentFormBuilder $form,
        StreamRepositoryInterface $streams,
        FieldRepositoryInterface $fields,
        $id,
        $field
    ) {
        /* @var StreamInterface $group */
        /* @var FieldInterface $field */
        $group = $streams->find($id);
        $field = $fields->find($field);

        return $form
            ->setActions(
                [
                    'save' => [
                        'redirect' => 'admin/variables/groups/assignments/' . $id
                    ]
                ]
            )
            ->setStream($group)
            ->setField($field)
            ->render();
    }

    /**
     * Return a form for an existing page type field and assignment.
     *
     * @param AssignmentFormBuilder       $form
     * @param StreamRepositoryInterface   $streams
     * @param BreadcrumbCollection        $breadcrumbs
     * @param                             $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function assignment(
        AssignmentFormBuilder $form,
        StreamRepositoryInterface $streams,
        BreadcrumbCollection $breadcrumbs,
        $id,
        $assignment
    ) {
        /* @var StreamInterface $group */
        $group = $streams->find($id);

        $breadcrumbs->put('streams::breadcrumb.assignments', 'admin/pages/types/assignments/' . $group->getId());

        return $form->setActions(
            [
                'save' => [
                    'redirect' => 'admin/variables/groups/assignments/' . $id
                ]
            ]
        )->render($assignment);
    }
}
