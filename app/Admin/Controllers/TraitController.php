<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Traits;
use App\Models\TraitCategory;
use App\Models\TraitRange;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class TraitController extends AdminController
{
    public $pricingTypes = [
        'free' => 'Free',
        'premium' => 'Premium'
    ];

    public $statuses = [
        'active' => 'Active',
        'passive' => 'Passive'
    ];
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Traits(['category']), function (Grid $grid) {

            $grid->quickSearch('name');
            $grid->toolsWithOutline(false);
            $grid->withBorder(false);
            $grid->fixColumns(0, 1);

            $grid->column('id')->sortable();
            $grid->column('name')->sortable();

            $grid->column('category.name', 'Category')->sortable();

            $grid->column('icon')->display(function ($icon) {
                return "<i class='fa $icon'></i>";
            });

            $grid->column('status')->using($this->statuses)->label([
                'active' => 'success',
                'passive' => 'danger',
            ])
            ->sortable()
            ->filter(
                Grid\Column\Filter\In::make($this->statuses)
            );

            $grid->column('pricing_type')->using($this->pricingTypes)->label([
                'free' => 'primary',
                'premium' => 'success',
            ])
            ->sortable()
            ->filter(
                Grid\Column\Filter\In::make($this->pricingTypes)
            );

            $grid->column('created_at');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->like('name');
                $filter->like('description');
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
        return Show::make($id, new Traits(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('description');
            $show->html(function () {
                return '<div class="show-field form-group row">
                    <div class="col-sm-2 control-label">
                        <span>Icon</span>
                    </div>

                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <div class="box-body">
                            <i class="fa '. $this->icon .'"></i>
                            </div>
                        </div>
                    </div>
                </div>';
            });
            $show->field('status')->label();;
            $show->field('pricing_type')->using($this->pricingTypes)->label();;

            $show->divider();

            $show->field('referance_title');
            $show->field('refereance_description');
            $show->field('reference_url');
            // $show->field('referance_values');

            $show->divider();

            $show->relation('ranges', function ($model) {
                $grid = new Grid(new TraitRange());

                $grid->model()->where('trait_id', $model->id);

                $grid->setResource('ranges');

                $grid->id();
                $grid->column('showed_name');
                $grid->column('description');
                $grid->column('start_range');
                $grid->column('end_range');

                $grid->filter(function ($filter) {
                    $filter->like('showed_name')->width('300px');
                });

                return $grid;
            });


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
        return Form::make(new Traits(), function (Form $form) {
            $form->display('id');

            $form->text('name')->required();
            $form->icon('icon');

            $form->textarea('description');

            $form->radio('status')->options(getStatuses())->default('active');

            $form->select('trait_category_id')
                ->label('Category')
                ->placeholder('Category')
                ->options(TraitCategory::all()->pluck('name', 'id')->toArray());

            $form->radio('pricing_type')->options([
                'free'    => 'Free',
                'premium' => 'Premium',
            ])->default('free');

            $form->text('referance_title');
            $form->textarea('refereance_description');
            $form->url('reference_url');

            $form->table('referance_values', function ($form) {
                $form->text('result')->required();
                $form->rate('scientific_reliability')->required();
                $form->text('chrom')->required();
                $form->text('snp_id')->required();
                $form->text('Population')->required();
            })->saving(function ($v) {
                return json_encode($v);
            });

            $form->hasMany('ranges', 'Ranges', function (Form\NestedForm $form) {
                $form->text('showed_name');
                $form->text('description');
                $form->range('start_range', 'end_range', 'Result Range');
            })
            ->useTable()
            ->values($form->model()->ranges ?? []);

        });
    }
}
