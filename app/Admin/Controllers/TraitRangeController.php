<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\TraitRange;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class TraitRangeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TraitRange(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('showed_name');
            $grid->column('description');
            $grid->column('start_range');
            $grid->column('end_range');
            $grid->column('trait_id');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
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
        return Show::make($id, new TraitRange(), function (Show $show) {
            $show->field('id');
            $show->field('showed_name');
            $show->field('description');
            $show->field('start_range');
            $show->field('end_range');
            $show->field('trait_id');
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
        return Form::make(new TraitRange(), function (Form $form) {
            $form->display('id');
            $form->text('showed_name');
            $form->text('description');
            $form->text('start_range');
            $form->text('end_range');
            $form->text('trait_id');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
