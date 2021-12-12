<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Package;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class PackageController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Package(), function (Grid $grid) {

            $grid->quickSearch('name');
            $grid->toolsWithOutline(false);
            $grid->withBorder(false);
            $grid->fixColumns(0, 1);

            $grid->column('id')->sortable();
            $grid->column('name')->sortable();
            $grid->column('limit')->sortable();
            $grid->column('price')->sortable();

            $grid->column('status')->using(getStatuses())->label([
                'active'  => 'success',
                'passive' => 'danger',
            ])
                ->sortable()
                ->filter(
                    Grid\Column\Filter\In::make(getStatuses())
                );

            $grid->column('period')->label()->sortable();
            $grid->column('created_at');

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
        return Show::make($id, new Package(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('description');
            $show->field('limit');
            $show->field('price');
            $show->field('status');
            $show->field('period');
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
        return Form::make(new Package(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();

            $form->editor('description');
            $form->number('limit');
            $form->currency('price');

            $form->radio('status')->options(getStatuses())->default('active');

            $form->radio('period')->options([
                'monthly' => 'Monthly',
                'annual'  => 'Annual',
            ])->default('monthly');

            $form->display('created_at');
        });
    }
}
