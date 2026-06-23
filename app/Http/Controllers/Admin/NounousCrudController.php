<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NounousRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class NounousCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NounousCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    // use \App\Http\Controllers\Admin\Operations\DownloadDocOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Nounous::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/nounous');
        CRUD::setEntityNameStrings('nounous', 'nounous');
        // $this->crud->denyAccess('edit');
        // $this->crud->denyAccess('show');
        // $this->crud->allowAccess('downloaddoc');
        // $this->crud->addButtonFromView('line', 'show', 'moderate', 'beginning');
        // $this->crud->enableExportButtons();
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // add a button whose HTML is returned by a method in the CRUD model
        CRUD::addColumn(['name' => 'nom', 'type' => 'text']);
        CRUD::addColumn(['name' => 'prenom', 'type' => 'text']);
        CRUD::addColumn(['name' => 'lieu_residence', 'type' => 'text']);
        CRUD::addColumn(['name' => 'telephone', 'type' => 'text']);
        // CRUD::addColumn(['name' => 'piece_identite', 'type' => 'text']);
        CRUD::addColumn(['name' => 'status', 'type' => 'text', "label"=> "adhérente"]);
        $this->crud->addButtonFromModelFunction('line', 'download', 'download', 'beginning');


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(NounousRequest::class);

        CRUD::addField(['name' => 'nom', 'type' => 'text']);
        CRUD::addField(['name' => 'prenom', 'type' => 'text']);
        CRUD::addField(['name' => 'lieu_residence', 'type' => 'text']);
        CRUD::addField(['name' => 'telephone', 'type' => 'text']);
        CRUD::addField(['name' => 'piece_identite', 'type' => 'text']);



        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
