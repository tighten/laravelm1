<?php

return [
    'status' => function ($expression, $page) {
        $colors = [
            'unsure' => 'bg-gray-400',
            'no' => 'bg-red-500',

        ];

        return '<div class="' . $colors[$expression] . ' inline-block w-3 h-3 rounded mr-1"></div>'
    }
];
