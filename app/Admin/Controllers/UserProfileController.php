<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\UserProfile;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UserProfileController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new UserProfile(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('gender');
            $grid->column('age');
            $grid->column('ethnicities');
            $grid->column('interests');
            $grid->column('user_id');
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
        return Show::make($id, new UserProfile(), function (Show $show) {
            $show->field('id');
            $show->field('gender');
            $show->field('age');
            $show->field('ethnicities');
            $show->field('interests');
            $show->field('user_id');
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
        return Form::make(new UserProfile(), function (Form $form) {
            $form->display('id');
            $form->text('gender');
            $form->text('age');
            $form->text('ethnicities');
            $form->text('interests');
            $form->text('user_id');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
