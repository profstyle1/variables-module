## Usage[](#usage)

This section will show you how to use the addon via API and in the view layer.


### Variables[](#usage/variables)

Variables are fields on a group entry that can be used to store information to use throughout your website or application.


#### Variable Repository[](#usage/variables/variable-repository)

This class will go over the `\Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface`


##### VariableRepositoryInterface::get()[](#usage/variables/variable-repository/variablerepositoryinterface-get)

The `get` method returns the raw data for the `variable` specified in a given `group`.

###### Returns: `mixed`

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$group

</td>

<td>

true

</td>

<td>

string

</td>

<td>

none

</td>

<td>

The slug of the group you want to access.

</td>

</tr>

<tr>

<td>

$field

</td>

<td>

true

</td>

<td>

string

</td>

<td>

none

</td>

<td>

The slug of the variable field in the group you want to access.

</td>

</tr>

</tbody>

</table>

###### Example

    $variables->get('social', 'facebook_url'); // https://facebook.com/pyrocms


##### VariableRepositoryInterface::presenter()[](#usage/variables/variable-repository/variablerepositoryinterface-presenter)

The `presenter` method returns the field type presenter for the `variable` specified in a given `group`.

###### Returns: `\Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter` or `null`

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$group

</td>

<td>

true

</td>

<td>

string

</td>

<td>

none

</td>

<td>

The slug of the group you want to access.

</td>

</tr>

<tr>

<td>

$field

</td>

<td>

true

</td>

<td>

string

</td>

<td>

none

</td>

<td>

The slug of the variable field in the group you want to access.

</td>

</tr>

</tbody>

</table>

###### Example

    $variables->presenter('social', 'facebook_url')->link('Facebook'); // <a href="https://facebook.com/pyrocms">Facebook</a>


##### VariableRepositoryInterface::group()[](#usage/variables/variable-repository/variablerepositoryinterface-group)

The `group` method returns the entire `group` entry model so you can then easily access any `variable` on said model.

###### Returns: `\Anomaly\Streams\Platform\Entry\Contract\EntryInterface` or `null`

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$group

</td>

<td>

true

</td>

<td>

string

</td>

<td>

none

</td>

<td>

The slug of the group you want to access.

</td>

</tr>

</tbody>

</table>

###### Example

    $group = $variables->group('social');

    echo $group->facebook_url; // https://facebook.com/pyrocms
    echo $group->twitter_url; // https://twitter.com/pyrocms

    echo $group->getFieldTypePresenter('facebook_url')->link('Facebook'); // <a href="https://facebook.com/pyrocms">Facebook</a>


### Plugin[](#usage/plugin)

This section will go over how to use the plugin that comes with the Variables module.


#### variable[](#usage/plugin/variable)

The `variable` function returns the field type presenter for the `variable` specified in a given `group`.

###### Returns: `\Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter` or `null`

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$group

</td>

<td>

true

</td>

<td>

string

</td>

<td>

none

</td>

<td>

The slug of the group you want to access.

</td>

</tr>

<tr>

<td>

$field

</td>

<td>

true

</td>

<td>

string

</td>

<td>

none

</td>

<td>

The slug of the variable field in the group you want to access.

</td>

</tr>

</tbody>

</table>

###### Twig

    {{ variable('social', 'facebook_url').link('Facebook')|raw }} // <a href="http://facebook.com/pyrocms">Facebook</a>


#### variable_value[](#usage/plugin/variable-value)

The `variable_value` function returns the raw data for the `variable` specified in a given `group`.

###### Returns: `mixed`

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$group

</td>

<td>

true

</td>

<td>

string

</td>

<td>

none

</td>

<td>

The slug of the group you want to access.

</td>

</tr>

<tr>

<td>

$field

</td>

<td>

true

</td>

<td>

string

</td>

<td>

none

</td>

<td>

The slug of the variable field in the group you want to access.

</td>

</tr>

</tbody>

</table>

###### Twig

    {{ variable_value('social', 'facebook_url') }} // https://facebook.com/pyrocms


#### variable_group[](#usage/plugin/variable-group)

The `variable_group` function returns the entire decorated `group` entry model so you can then easily access any `variable` on said model.

###### Returns: `\Anomaly\Streams\Platform\Entry\EntryPresenter` or `null`

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$group

</td>

<td>

true

</td>

<td>

string

</td>

<td>

none

</td>

<td>

The slug of the group you want to access.

</td>

</tr>

</tbody>

</table>

###### Twig

    {{ variable_group('social').facebook_url }} // https://facebook.com/pyrocms (__toString output)
    {{ variable_group('social').facebook_url.value }} // https://facebook.com/pyrocms (raw value)
    {{ variable_group('social').facebook_url.link('Facebook') }} // <a href="https://facebook.com/pyrocms">Facebook</a>

    // Or set as a Twig variable

    {% set group = variable_group('social') %}

    {{ group.facebook_url.link('Facebook') }} // <a href="https://facebook.com/pyrocms">Facebook</a>
