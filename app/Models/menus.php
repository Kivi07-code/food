<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Menus {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'foodname' => 'Mac n Cheese',
                'cost' => '$4.55'
            ],
            [
                'id' => 2,
                'foodname' => 'Meatball Soup',
                'cost' => '$2.90'
            ],
            [
                'id' => 3,
                'foodname' => 'Caesar Salad',
                'cost' => '$2.59'
            ],
            [    
                'id' => 4,
                'foodname' => 'Spaghetti',
                'cost' => '$2.20'
            ],
            [    
                'id' => 5,
                'foodname' => 'Ravioli',
                'cost' => '$4.89'
            ],
            [    
                'id' => 6,
                'foodname' => 'Grilled Meatballs',
                'cost' => '$1.10'
            ],
            [    
                'id' => 7,
                'foodname' => 'Moussaka',
                'cost' => '$4.10'
            ],
            [    
                'id' => 8,
                'foodname' => 'Tarator',
                'cost' => '$2.10'
            ],
            [    
                'id' => 9,
                'foodname' => 'Burger',
                'cost' => '$3.45'
            ],
            [    
                'id' => 10,
                'foodname' => 'Tomato soup',
                'cost' => '$1.55'
            ],
            [    
                'id' => 11,
                'foodname' => 'Fries',
                'cost' => '$2.80'
            ],
            [    
                'id' => 12,
                'foodname' => 'Churros',
                'cost' => '$5.45'
            ],

        ];
    }

    public static function find(int $id): array
    {
        $menus = Arr::first(static::all(), fn($menus) => $menus['id'] == $id);

        if (! $menus) {
            abort(404);
        }

        return $menus;
    }
}