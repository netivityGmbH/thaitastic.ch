<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model {
    use \Sushi\Sushi;

    protected $rows = [
        [
            'id' => 1,
            'name' => 'Grapau Fusion Bites',
            'description' => 'Pepperoni, Sausage, Mushrooms, Green Peppers, Onions',
            'price' => '1.00',
        ],
        [
            'id' => 2,
            'name' => 'Namtok Spice Twist',
            'description' => 'Pepperoni, Sausage, Mushrooms, Green Peppers, Onions',
            'price' => '2.00',
        ],
        [
            'id' => 3,
            'name' => 'Banh Mi Delight',
            'description' => 'Pepperoni, Sausage, Mushrooms, Green Peppers, Onions',
            'price' => '3.00',
        ],
    ];

    public function getFormattedPriceAttribute() {
        return 'CHF ' . number_format($this->price, 2, '.', '') . '.-';
    }
}
