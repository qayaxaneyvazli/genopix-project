<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\User;
use App\Models\Ethnic;
use App\Models\TraitCategory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class UserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(User::with(['package']), function (Grid $grid) {

            $grid->quickSearch('fullname');
            $grid->toolsWithOutline(false);
            $grid->withBorder(false);
            $grid->fixColumns(0, 1);

            $grid->column('id')->sortable();
            $grid->column('fullname')->sortable();
            $grid->column('email')->sortable();
            $grid->column('barcode')->sortable();
            $grid->column('package.name', 'Package Name')->label();

            $grid->column('created_at');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->like('fullname');
                $filter->like('email');
                $filter->like('barcode');
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
        return Show::make($id, User::with('profile'), function (Show $show) {
            $show->field('id');
            $show->field('fullname');
            $show->field('email');
            $show->field('barcode');
            $show->field('profile.gender');
            $show->field('profile.age');

            $show->field('package_id');
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
        return Form::make(User::with('profile'), function (Form $form) {
            $form->display('id');
            $form->text('fullname')->required();
            $form->email('email')->required();
            $form->text('barcode');

            $form->radio('profile.gender')->options([
                'male'   => 'Male',
                'female' => 'Female',
            ]);

            $form->number('profile.age');

            $form->multipleSelect('profile.ethnicities')->options(Ethnic::pluck('name'));
            $form->multipleSelect('profile.interests')->options(TraitCategory::pluck('name'));

            $form->text('package_id');

        });
    }
}
