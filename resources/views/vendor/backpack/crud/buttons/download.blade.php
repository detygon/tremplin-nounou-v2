@if ($crud->hasAccess('update'))
<a href="{{ url($crud->route.'/'.$entry->getKey().'/download') }} " class="btn btn-xs btn-default"><i class="fa fa-ban"></i> Moderate</a>
@endif
