<?php

namespace App\Http\Controllers\Admin\Operations;

use Illuminate\Support\Facades\Route;

trait DownloadDocOperation
{
    /**
     * Define which routes are needed for this operation.
     *
     * @param string $segment    Name of the current entity (singular). Used as first URL segment.
     * @param string $routeName  Prefix of the route name.
     * @param string $controller Name of the current CrudController.
     */
    protected function setupDownloadDocRoutes($segment, $routeName, $controller)
    {
        Route::get($segment.'/downloaddoc', [
            'as'        => $routeName.'.downloaddoc',
            'uses'      => $controller.'@downloaddoc',
            'operation' => 'downloaddoc',
        ]);
    }

    /**
     * Add the default settings, buttons, etc that this operation needs.
     */
    protected function setupDownloadDocDefaults()
    {
        $this->crud->allowAccess('downloaddoc');

        $this->crud->operation('downloaddoc', function () {
            $this->crud->loadDefaultOperationSettingsFromConfig();
        });

        $this->crud->operation('list', function () {
            // $this->crud->addButton('top', 'downloaddoc', 'view', 'crud::buttons.downloaddoc');
            $this->crud->addButton('line', 'update', 'view', 'crud::buttons.downloaddoc');
        });
    }

    /**
     * Show the view for performing the operation.
     *
     * @return Response
     */
    public function downloaddoc()
    {
        $this->crud->hasAccessOrFail('downloaddoc');

        // prepare the fields you need to show
        $this->data['crud'] = $this->crud;
        $this->data['title'] = $this->crud->getTitle() ?? 'downloaddoc '.$this->crud->entity_name;

        // load the view
        return view("crud::operations.downloaddoc", $this->data);
    }
}
