<?php

return [
    'status' => function ($expression) {
        return '
        <?php
            $colors = [
                "unsure" => "bg-gray-400",
                "no" => "bg-red-500",
                "yes" => "bg-green-500",
                "rosetta" => "bg-blue-500",
            ];
        ?>
        <div class="<?php echo $colors[' . $expression . ']; ?> inline-block w-3 h-3 rounded mr-1"></div>';
    },
];
