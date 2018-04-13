<?php namespace Anomaly\VariablesModule\Variable\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class VariableFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class VariableFormBuilder extends FormBuilder
{

    /**
     * The form buttons.
     *
     * @var array
     */
    protected $buttons = [
        'versions' => [
            'href' => 'admin/variables/versions/{entry.id}?group={request.route.parameters.id}',
        ],
        'cancel',
    ];

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
