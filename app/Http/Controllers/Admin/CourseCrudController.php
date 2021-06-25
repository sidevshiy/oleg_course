<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CourseRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CourseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CourseCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Course::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/course');
        CRUD::setEntityNameStrings('course', 'courses');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // columns

        $this->crud->addColumns([
            [
                'name' => 'title', // the db column name (attribute name)
                'label' => "Название", // the human-readable label for it
                'type' => 'text' // the kind of column to show
            ],
            [
                'name' => 'price', // the db column name (attribute name)
                'label' => "Цена", // the human-readable label for it
                'type' => 'Integer' // the kind of column to show
            ],
            [
                'name' => 'teacher', // the db column name (attribute name)
                'label' => "Преподаватель", // the human-readable label for it
                'type' => 'text' // the kind of column to show
            ],
        ]);

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
        CRUD::setValidation(CourseRequest::class);

       // CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */

        $this->crud->addFields(static::getFieldsArray());
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

    public static function getFieldsArray()
    {
        return [
            [ // Image
                'label' => "Фото курса",
                'name' => "photo",
                'type' => 'image',
//                'crop' => true, // set to true to allow cropping, false to disable
//                 'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
//                 'prefix'=> 'uploads/girls',
            ],
            [ // Name
                'label' => 'Название',
                'name' => 'title',
                'type' => 'text',
                'wrapperAttributes' => ['class' => 'form-group col-md-6'],
            ],
            [ // Price
                'name' => 'price',
                'label' => 'Стоимость',
                'type' => 'number',
                'prefix' => '$',
                'attributes' => [
                    'min' => 0,],
                'wrapperAttributes' => ['class' => 'form-group col-md-6'],
            ],
            [ // Description
                'name'          => 'description',
                'label'         => 'Описание',
                'type'          => 'ckeditor',
                // optional:
                'options'       => [
                    'autoGrow_minHeight'   => 200,
                    'autoGrow_bottomSpace' => 50,
                    'removePlugins'        => 'resize,maximize',
                ]
            ],
            [ // Text
                'name'          => 'text',
                'label'         => 'Текст',
                'type'          => 'ckeditor',
                // optional:
                'options'       => [
                    'autoGrow_minHeight'   => 200,
                    'autoGrow_bottomSpace' => 50,
                    'removePlugins'        => 'resize,maximize',
                ]
            ],
            [ // Name of teacher
                'name' => 'teacher',
                'label' => 'Имя преподавателя',
                'type' => 'text',
                'wrapperAttributes' => ['class' => 'form-group col-md-6'],
            ],
            [ // YouTube link
                'name' => 'youtube_link',
                'label' => 'Ссылка на видео',
                'type' => 'text',
                'wrapperAttributes' => ['class' => 'form-group col-md-6'],
            ],
            [   // From
                'name'  => 'from',
                'label' => 'Начало',
                'type'  => 'time',
                'wrapperAttributes' => ['class' => 'form-group col-md-6']
            ],
            [   // To
                'name'  => 'to',
                'label' => 'Конец',
                'type'  => 'time',
                'wrapperAttributes' => ['class' => 'form-group col-md-6']
            ],
        ];
    }
}
