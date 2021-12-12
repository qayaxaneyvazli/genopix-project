<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\TraitCategory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class TraitCategoryController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TraitCategory(), function (Grid $grid) {

            $grid->quickSearch('name');
            $grid->toolsWithOutline(false);
            $grid->withBorder(false);
            $grid->fixColumns(0, 1);

            $grid->column('id')->sortable();
            $grid->column('name');

            $grid->column('icon')->display(function ($icon) {
                return "<i class='fa $icon'></i>";
            });
            $grid->column('color')->display(function ($color) {
                return "<span style='color:$color'>$color</span>";
            });

            $grid->column('created_at');

            $grid->column('sort_order')->label()->orderable();

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
        return Show::make($id, new TraitCategory(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('icon');
            $show->field('color');
            $show->field('sort_order');
            $show->field('description');
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
        return Form::make(new TraitCategory(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();
            $form->icon('icon');
            $form->color('color');
            $form->number('sort_order');
            $form->textarea('description');

        });
    }
}
