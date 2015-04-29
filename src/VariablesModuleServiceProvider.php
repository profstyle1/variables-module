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
        'admin/variables'              => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@index',
        'admin/variables/create'       => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@create',
        'admin/variables/edit/{id}'    => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@edit',
        'admin/variables/assign/{id?}' => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@assign',
        'admin/variables/set/{field}'  => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@set'
    ];

    /**
     * The addon bindings.
     *
     * @var array
     */
    protected $bindings = [
        'Anomaly\VariablesModule\Variable\VariableModel'                        => 'Anomaly\VariablesModule\Variable\VariableModel',
        'Anomaly\Streams\Platform\Model\Variables\VariablesVariablesEntryModel' => 'Anomaly\VariablesModule\Variable\VariableModel'
    ];

    /**
     * The singleton bindings.
     *
     * @var array
     */
    protected $singletons = [
        'Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface' => 'Anomaly\VariablesModule\Variable\VariableRepository'
    ];

}
