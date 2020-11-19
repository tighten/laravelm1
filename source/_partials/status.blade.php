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
        'npm' => 'dunno',
        'nvm' => 'dunno',
        'Lambo' => 'yes',
        'oh-my-zsh' => 'yes',
        'Redis' => 'dunno',
    ],
    'Laravel development environments' => [
        'Laravel Valet' => 'yes',
        'Laravel Valet Share' => 'boo',
        'Laravel Homestead' => 'dunno',
    ],
    'Laravel internal tools' => [
        'Artisan' => 'yes',
        'Tinker' => 'yes',
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
        'iTerm' => 'yes',
        'Tinkerwell' => 'yes',
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
        'Karabiner Elements' => 'yes',
        'Invoker' => 'dunno',
    ],
    'Laravel internal tools' => [
        'Artisan' => 'yes',
        'Tinker' => 'yes',
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
        'iTerm' => 'yes',
        'Tinkerwell' => 'yes',
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
        'Karabiner Elements' => 'yes',
        'Invoker' => 'dunno',
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
