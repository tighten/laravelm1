@php
$categories = [
    'Laravel Command-line tools' => [
        'Laravel Installer' => 'yay',
    ],
    'Laravel-ancillary command-line tools' => [
        'PHP' => 'yay',
        'Vim' => 'yay',
        'Composer' => 'yay',
        'Homebrew' => 'yay',
        'npm' => 'dunno',
        'nvm' => 'dunno',
        'Lambo' => 'yay',
        'oh-my-zsh' => 'yay',
        'Redis' => 'dunno',
    ],
    'Laravel development environments' => [
        'Laravel Valet' => 'dunno',
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
@endphp

@foreach ($categories as $name => $tools)
    <h2>{{ $name }}</h2>
    <ul>
    @foreach ($tools as $toolName => $partial)
        @if (is_array($partial))
            <li><a href="{{ $partial['link'] }}">@include('_partials.' . $partial['partial']){{ $toolName }}</a></li>
        @else
            <li>@include('_partials.' . $partial){{ $toolName }}</li>
        @endif
    @endforeach
    </ul>
@endforeach
