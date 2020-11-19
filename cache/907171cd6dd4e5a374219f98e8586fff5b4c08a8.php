<?php
$categories = [
    'Laravel Command-line tools' => [
        'Laravel Installer' => 'yay',
    ],
    'Laravel-ancillary command-line tools' => [
        'PHP' => 'yay',
        'Vim' => 'yay',
        'Composer' => 'yay',
        'Homebrew' => [
            'link' => 'https://soffes.blog/homebrew-on-apple-silicon',
            'status' => 'yay',
        ],
        'npm' => 'dunno',
        'nvm' => 'dunno',
        'Lambo' => 'yay',
        'oh-my-zsh' => 'yay',
        'Redis' => 'dunno',
    ],
    'Laravel development environments' => [
        'Laravel Valet' => 'yay',
        'Laravel Valet Share' => 'boo',
        'Laravel Homestead' => 'dunno',
    ],
    'Laravel internal tools' => [
        'Artisan' => 'yay',
        'Tinker' => 'yay',
        'Horizon' => 'dunno',
    ],
    'Laravel development environments' => [
        'Laravel Valet' => 'dunno',
        'Laravel Homestead' => 'dunno',
    ],
    'Docker-based tools' => [
        'Docker' => 'dunno',
        'Vessel' => 'dunno',
        'Takeout' => 'dunno',
    ],
    'Common macOS tools used by Laravel developers' => [
        'iTerm' => 'yay',
        'Tinkerwell' => 'yay',
        'Sublime Text' => 'dunno',
        'VS Code' => 'dunno',
        'PHPStorm' => 'dunno',
        'TablePlus' => 'dunno',
        'GitHub Desktop' => 'dunno',
        'Slack' => 'dunno',
        'Discord' => 'dunno',
        'Trello' => 'dunno',
        'Rocket' => 'dunno',
        'Parallels' => 'dunno',
        'Rogue Amoeba tools' => 'dunno',
        'Adobe Audition' => 'dunno',
        'Screenflow' => 'dunno',
        'OBS' => 'dunno',
        'Karabiner Elements' => 'yay',
        'Invoker' => 'dunno',
    ],
    'Laravel internal tools' => [
        'Artisan' => 'yay',
        'Tinker' => 'yay',
        'Horizon' => 'dunno',
    ],
    'Laravel development environments' => [
        'Laravel Valet' => 'dunno',
        'Laravel Homestead' => 'dunno',
    ],
    'Docker-based tools' => [
        'Docker' => 'dunno',
        'Vessel' => 'dunno',
        'Takeout' => 'dunno',
    ],
    'Common macOS tools used by Laravel developers' => [
        'iTerm' => 'yay',
        'Tinkerwell' => 'yay',
        'Sublime Text' => 'dunno',
        'VS Code' => 'dunno',
        'PHPStorm' => 'dunno',
        'TablePlus' => 'dunno',
        'GitHub Desktop' => 'dunno',
        'Slack' => 'dunno',
        'Discord' => 'dunno',
        'Trello' => 'dunno',
        'Rocket' => 'dunno',
        'Parallels' => 'dunno',
        'Rogue Amoeba tools' => 'dunno',
        'Adobe Audition' => 'dunno',
        'Screenflow' => 'dunno',
        'OBS' => 'dunno',
        'Karabiner Elements' => 'yay',
        'Invoker' => 'dunno',
    ],
];
?>

<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $tools): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><?php echo e($name); ?></h2>
    <ul>
    <?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $toolName => $partial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(is_array($partial)): ?>
            <li><a href="<?php echo e($partial['link']); ?>"><?php echo $__env->make('_partials.' . $partial['status'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php echo e($toolName); ?></a></li>
        <?php else: ?>
            <li><?php echo $__env->make('_partials.' . $partial, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php echo e($toolName); ?></li>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Users/mattstauffer/Sites/laravelm1/source/_partials/status.blade.php ENDPATH**/ ?>