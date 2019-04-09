<?php

namespace Utichawa\Widgets\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WidgetTranslation extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'widget_id',
        'locale',
        'name',
        'description',
        'button_title',
    ];


    // belongsTo Relationships

    public function module()
    {
        return $this->belongsTo(Widget::class, 'widget_id');
    }

    // hasMany Relationships

    // ManyToMany
}
