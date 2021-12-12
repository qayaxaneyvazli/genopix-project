<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\TraitResult;
use App\Models\Ethnic;
use App\Models\Referance;
use App\Models\Traits;
use App\Models\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class TraitResultController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(TraitResult::with(['user', 'trait']), function (Grid $grid) {

            $grid->quickSearch('trait_id');
            $grid->toolsWithOutline(false);
            $grid->withBorder(false);
            $grid->fixColumns(0, 1);

            $grid->column('id')->sortable();
            $grid->column('user.email')->sortable();
            $grid->column('trait.name')->sortable();
            $grid->column('score')->sortable();
            // $grid->column('snps');
            // $grid->column('rsID');
            // $grid->column('effect_allele');
            // $grid->column('reference_allele');
            // $grid->column('genotype');
            // $grid->column('reliability');
            // $grid->column('population');
            // $grid->column('gene_in_ld');
            // $grid->column('references');
            $grid->column('created_at');

            $grid->disableViewButton();

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
        return Show::make($id, new TraitResult(), function (Show $show) {
            $show->field('id');
            $show->field('trait_id');
            $show->field('user_id');
            $show->field('score');
            $show->field('snps');
            $show->field('rsID');
            $show->field('effect_allele');
            $show->field('reference_allele');
            $show->field('genotype');
            $show->field('reliability');
            $show->field('population');
            $show->field('gene_in_ld');
            $show->field('references');
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
        return Form::make(new TraitResult(), function (Form $form) {
            $form->display('id');

            $form->select('trait_id')->options(Traits::pluck('name', 'id'));
            $form->select('user_id')->options(User::pluck('email', 'id'));

            $form->text('score');

            $form->list('snps');
            $form->list('rsID');
            $form->list('effect_allele');
            $form->list('reference_allele');
            $form->list('genotype');
            $form->list('reliability');
            $form->list('gene_in_ld');

            $form->multipleSelect('population')->options(Ethnic::all()->pluck('name', 'id'));

            $form->multipleSelect('references')->options(Referance::all()->pluck('title', 'id'));

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
