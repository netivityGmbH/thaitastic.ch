<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MenuItem extends Model {
    use \Sushi\Sushi;

    protected $rows = [
        [
            'id' => 1,
            'name' => 'Grapau Fusion Bites',
            'description' => '',
            'price' => '',
        ],
        [
            'id' => 2,
            'name' => 'Namtok Spice Twist',
            'description' => '',
            'price' => '',
        ],
        [
            'id' => 3,
            'name' => 'Banh Mi Delight',
            'description' => '',
            'price' => '',
        ],
    ];

    public function getFormattedPriceAttribute() {
        if (Str::length($this->price) === 0) {
            return '';
        }

        return 'CHF ' . number_format($this->price, 2, '.', '') . '.-';
    }
}
