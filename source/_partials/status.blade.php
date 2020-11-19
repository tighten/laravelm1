@php
$categories = [
    'Laravel Command-line tools' => [
        'Laravel Installer' => 'yes',
    ],
    'Laravel-ancillary command-line tools' => [
        'PHP' => 'yes',
        'Vim' => 'yes',
        'Composer' => 'yes',
        'Homebrew' => [
            'link' => 'https://soffes.blog/homebrew-on-apple-silicon',
            'status' => 'yes',
        ],
        'npm' => 'unsure',
        'nvm' => 'unsure',
        'Lambo' => 'yes',
        'oh-my-zsh' => 'yes',
        'Redis' => 'unsure',
    ],
    'Laravel internal tools' => [
        'Artisan' => 'yes',
        'Tinker' => 'yes',
        'Horizon' => 'unsure',
    ],
    'Laravel development environments' => [
        'Laravel Valet' => 'yes',
        'Laravel Valet Share' => 'no',
        'Laravel Homestead' => 'unsure',
    ],
    'Docker-based tools' => [
        'Docker' => 'unsure',
        'Vessel' => 'unsure',
        'Takeout' => 'unsure',
    ],
    'Common macOS tools used by Laravel developers' => [
        'iTerm' => 'yes',
        'Tinkerwell' => 'yes',
        'Sublime Text' => 'unsure',
        'VS Code' => 'unsure',
        'PHPStorm' => 'unsure',
        'TablePlus' => 'unsure',
        'GitHub Desktop' => 'unsure',
        'Slack' => 'unsure',
        'Discord' => 'unsure',
        'Trello' => 'unsure',
        'Rocket' => 'unsure',
        'Parallels' => 'unsure',
        'Rogue Amoeba tools' => 'unsure',
        'Adobe Audition' => 'unsure',
        'Screenflow' => 'unsure',
        'OBS' => 'unsure',
        'Karabiner Elements' => 'yes',
        'Invoker' => 'unsure',
    ],
    'Laravel internal tools' => [
        'Artisan' => 'yes',
        'Tinker' => 'yes',
        'Horizon' => 'unsure',
    ],
    'Laravel development environments' => [
        'Laravel Valet' => 'unsure',
        'Laravel Homestead' => 'unsure',
    ],
    'Docker-based tools' => [
        'Docker' => 'unsure',
        'Vessel' => 'unsure',
        'Takeout' => 'unsure',
    ],
    'Common macOS tools used by Laravel developers' => [
        'iTerm' => 'yes',
        'Tinkerwell' => 'yes',
        'Sublime Text' => 'unsure',
        'VS Code' => 'unsure',
        'PHPStorm' => 'unsure',
        'TablePlus' => 'unsure',
        'GitHub Desktop' => 'unsure',
        'Slack' => 'unsure',
        'Discord' => 'unsure',
        'Trello' => 'unsure',
        'Rocket' => 'unsure',
        'Parallels' => 'unsure',
        'Rogue Amoeba tools' => 'unsure',
        'Adobe Audition' => 'unsure',
        'Screenflow' => 'unsure',
        'OBS' => 'unsure',
        'Karabiner Elements' => 'yes',
        'Invoker' => 'unsure',
    ],
];
@endphp

@foreach ($categories as $name => $tools)
    <h2>{{ $name }}</h2>
    <ul>
    @foreach ($tools as $toolName => $partial)
        @if (is_array($partial))
            <li><a href="{{ $partial['link'] }}">@include('_partials.' . $partial['status']){{ $toolName }}</a></li>
        @else
            <li>@include('_partials.' . $partial){{ $toolName }}</li>
        @endif
    @endforeach
    </ul>
@endforeach
