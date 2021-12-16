<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Dcat\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use App\Models\Traits;

class TraitCategory extends Model implements Sortable
{
    use ModelTree;
    use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'trait_categories';

    protected $orderColumn = 'sort_order';

    protected $sortable = [
        'order_column_name'  => 'sort_order',
        'sort_when_creating' => true,
    ];

    public function traits(){
        return $this->belongsTo(Traits::class, 'id','trait_category_id');
    }
}
