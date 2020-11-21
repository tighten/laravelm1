<?php

return [
    'status' => function ($expression) {
        return '
        <?php
            $emoji = [
                "unsure" => "❓",
                "no" => "🚫",
                "yes" => "✅",
                "rosetta" => "🛰",
            ];
        ?>
        <div class="inline-block w-3 h-3 rounded mr-4"><?php echo $emoji[' . $expression . ']; ?></div>';
    },
];
