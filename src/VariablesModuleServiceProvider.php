<?php namespace Anomaly\VariablesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class VariablesModuleServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule
 */
class VariablesModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/variables' => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@index'
    ];

}
