<?php

namespace Utichawa\Widgets\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WidgetElement extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    // belongsTo Relationships

    protected $fillable = [
        'widget_id',
        'widget_element_id',
        'is_active',
        'order',
    ];

    public function module()
    {
        return $this->belongsTo(Widget::class, 'widget_id');
    }

    // hasMany Relationships

    // ManyToMany


}
