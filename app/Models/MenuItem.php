<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model {
    use \Sushi\Sushi;

    protected $rows = [
        [
            'id' => 1,
            'name' => 'Thai Sub 1',
            'description' => 'Pepperoni, Sausage, Mushrooms, Green Peppers, Onions',
            'price' => '1.00',
        ],
        [
            'id' => 2,
            'name' => 'Thai Sub 2',
            'description' => 'Pepperoni, Sausage, Mushrooms, Green Peppers, Onions',
            'price' => '2.00',
        ],
        [
            'id' => 3,
            'name' => 'Thai Sub 3',
            'description' => 'Pepperoni, Sausage, Mushrooms, Green Peppers, Onions',
            'price' => '3.00',
        ],
    ];
}
