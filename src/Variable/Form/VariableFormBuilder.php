<?php namespace Anomaly\VariablesModule\Variable\Form;

use Anomaly\Streams\Platform\Entry\EntryModel;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class VariableFormBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class VariableFormBuilder extends FormBuilder
{

    /**
     * Fired just before building.
     */
    public function onReady()
    {

        /* @var EntryModel $model */
        $model = app($this->getModel());

        if ($model->isVersionable()) {
            $this->setButtons(
                [
                    'versions' => [
                        'href' => 'admin/variables/versions/{entry.id}?group={request.route.parameters.id}',
                    ],
                    'cancel',
                ]
            );
        }
    }

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
