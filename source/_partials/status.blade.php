@php
$categories = [
    'Laravel Command-line tools' => [
        'Laravel Installer' => 'yes',
    ],
    'Laravel internal tools' => [
        'Artisan' => 'yes',
        'Tinker' => 'yes',
        'Horizon' => 'unsure',
    ],
    'Laravel development environments' => [
        'Laravel Valet' => 'yes',
        'Laravel Valet Share' => [
            'link' => '#blog-valet-share',
            'status' => 'no',
        ],
        'Laravel Homestead' => 'unsure',
    ],
    'Laravel-ancillary command-line tools' => [
        'PHP' => 'yes',
        'Vim' => 'yes',
        'Composer' => 'yes',
        'Homebrew' => [
            'link' => 'https://soffes.blog/homebrew-on-apple-silicon',
            'status' => 'rosetta',
        ],
        'npm' => 'yes',
        'Lambo' => 'yes',
        'oh-my-zsh' => 'yes',
        'Homebrew Redis' => [
            'link' => '#blog-redis',
            'status' => 'no',
        ],
        'Redis' => [
            'link' => '#blog-redis',
            'status' => 'no',
        ],
        'MySQL' => 'yes',
        'PostgreSQL' => 'yes',
        'memcached' => 'unsure',
    ],
    'Common macOS tools used by Laravel developers' => [
        'iTerm' => 'yes',
        'Tinkerwell' => 'yes',
        'Sublime Text' => 'yes',
        'VS Code' => 'yes',
        'PHPStorm' => [
            'link' => 'https://youtrack.jetbrains.com/issue/JBR-2526',
            'status' => 'rosetta',
        ],
        'TablePlus' => 'yes',
        'That One App By the TablePlus people' => 'unsure',
        'GitHub Desktop' => 'yes',
        'Slack' => 'yes',
        'Discord' => 'yes',
        'Trello' => 'yes',
        'Rocket' => 'yes',
        'Parallels' => 'unsure',
        'Bartender' => 'unsure',
        'Breaktime' => 'unsure',
        'Rogue Amoeba tools' => [
            'status' => 'no',
            'link' => 'https://weblog.rogueamoeba.com/2020/11/16/rogue-amoeba-software-updates-for-macos-11-big-sur-and-m1-chip-based-macs/',
        ],
        'Screenflow' => 'no',
        'OBS' => [
            'status' => 'no',
            'link' => 'https://obsproject.com/forum/threads/support-for-m1-cpu-gpu-either-as-an-intel-app-or-recompiled.133576/',
            'details' => 'It runs and captures video and audio, but can\'t capture your screen.',
        ],
        'Karabiner Elements' => 'yes',
        'Invoker' => 'unsure',
    ],
    'Docker-based tools' => [
        'Docker' => 'no',
        'Vessel' => 'no',
        'Takeout' => 'no',
    ],
];
@endphp

@foreach ($categories as $name => $tools)
    <h2>{{ $name }}</h2>
    <ul>
    @foreach ($tools as $toolName => $partial)
        <li>
        @if (is_array($partial))
            <a href="{{ $partial['link'] }}">@status($partial['status']){{ $toolName }}</a>
            @if (isset($partial['details']))
            <div class="inline-block" x-data="{ open: false }">
                <a @click="open = true" class="cursor-pointer">[i]</a>
                <div
                    class="absolute bg-white border border-gray-500 p-4"
                    x-show="open"
                    @click.away="open = false"
                >
                    {{ $partial['details'] }}
                </div>
            </div>
            @endif
        @else
            @status($partial){{ $toolName }}
        @endif
        </li>
    @endforeach
    </ul>
@endforeach
