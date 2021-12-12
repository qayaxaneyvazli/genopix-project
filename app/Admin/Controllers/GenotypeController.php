<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Genotype;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class GenotypeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Genotype(), function (Grid $grid) {

            $grid->quickSearch('name');
            $grid->toolsWithOutline(false);
            $grid->withBorder(false);
            $grid->fixColumns(0, 1);

            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('description');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->like('name');
            });

            $grid->disableViewButton();

        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Genotype(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('description');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Genotype(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->textarea('description');
        });
    }
}
