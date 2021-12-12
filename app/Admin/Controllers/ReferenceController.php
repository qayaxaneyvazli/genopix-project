<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Referance;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ReferenceController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Referance(), function (Grid $grid) {

            $grid->quickSearch('title');
            $grid->toolsWithOutline(false);
            $grid->withBorder(false);
            $grid->fixColumns(0, 1);

            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('description');
            $grid->column('url');
            $grid->column('created_at');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
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
        return Show::make($id, new Referance(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('description');
            $show->field('url');
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
        return Form::make(new Referance(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->textarea('description');
            $form->url('url');

            $form->display('created_at');
        });
    }
}
