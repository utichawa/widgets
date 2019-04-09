<?php

namespace Utichawa\Widgets\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WidgetMenu extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'widget_id',
        'menu_id',
    ];

    protected $dates = ['deleted_at'];

    // belongsTo Relationships

    public function widget()
    {
        return $this->belongsTo(Widget::class, 'widget_id');
    }

    /*public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }*/

    // hasMany Relationships

    // ManyToMany


}
