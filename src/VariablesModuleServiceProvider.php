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
     * Plugins provided by the addon.
     *
     * @var array
     */
    protected $plugins = [
        'Anomaly\VariablesModule\Variable\Plugin\VariablePlugin'
    ];

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/variables'                                            => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@index',
        'admin/variables/edit/{id}'                                  => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@edit',
        'admin/variables/groups'                                     => 'Anomaly\VariablesModule\Http\Controller\Admin\GroupsController@index',
        'admin/variables/groups/create'                              => 'Anomaly\VariablesModule\Http\Controller\Admin\GroupsController@create',
        'admin/variables/groups/edit/{id}'                           => 'Anomaly\VariablesModule\Http\Controller\Admin\GroupsController@edit',
        'admin/variables/groups/fields/{id}'                         => 'Anomaly\VariablesModule\Http\Controller\Admin\GroupsController@fields',
        'admin/variables/groups/choose/{id}'                         => 'Anomaly\VariablesModule\Http\Controller\Admin\GroupsController@choose',
        'admin/variables/groups/fields/{id}/assign/{field}'          => 'Anomaly\VariablesModule\Http\Controller\Admin\GroupsController@assign',
        'admin/variables/groups/fields/{id}/assignment/{assignment}' => 'Anomaly\VariablesModule\Http\Controller\Admin\GroupsController@assignment',
        'admin/variables/fields'                                     => 'Anomaly\VariablesModule\Http\Controller\Admin\FieldsController@index',
        'admin/variables/fields/choose'                              => 'Anomaly\VariablesModule\Http\Controller\Admin\FieldsController@choose',
        'admin/variables/fields/create'                              => 'Anomaly\VariablesModule\Http\Controller\Admin\FieldsController@create',
        'admin/variables/fields/edit/{id}'                           => 'Anomaly\VariablesModule\Http\Controller\Admin\FieldsController@edit',
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
