<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Ethnic;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class EthnicController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Ethnic(), function (Grid $grid) {
            $grid->quickSearch('name');
            $grid->toolsWithOutline(false);
            $grid->withBorder(false);
            $grid->fixColumns(0, 1);

            $grid->column('name');
            $grid->column('created_at');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->like('name');
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
        return Show::make($id, new Ethnic(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('created_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Ethnic(), function (Form $form) {
            $form->display('id');
            $form->text('name');
        });
    }
}
