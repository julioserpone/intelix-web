<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentSection extends Model
{
    public static function scopeOfModule($query, $module = 'home') {

    	return $query->where('module', $module);
    }

    public function scopePrint($query, $section = '') {

    	return $query->get()->firstWhere('section', $section)['content'];
    }
}
