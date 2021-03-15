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
        'Laravel Valet Share' => 'yes',
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
        'Homebrew Redis' => 'yes',
        'Redis' => 'yes',
        'MySQL' => 'yes',
        'PostgreSQL' => 'yes',
        'memcached' => 'yes',
        'PECL' => 'yes',
        'pecl install mongodb' => 'unsure',
        'pecl install redis' => 'no',
        'Vagrant' => 'unsure',
    ],
    'Common macOS tools used by Laravel developers' => [
        'iTerm' => 'yes',
        'Tinkerwell' => 'yes',
        'Sublime Text' => 'yes',
        'VS Code' => 'yes',
        'PHPStorm' => 'yes',
        'TablePlus' => 'yes',
        'DBngin' => 'unsure',
        'GitHub Desktop' => 'yes',
        'Slack' => 'yes',
        'Discord' => 'yes',
        'Trello' => 'yes',
        'Rocket' => 'yes',
        'Parallels' => 'unsure',
        'Bartender' => 'yes',
        'Breaktime' => 'yes',
        'Rogue Amoeba tools' => [
            'status' => 'no',
            'link' => 'https://weblog.rogueamoeba.com/2020/11/16/rogue-amoeba-software-updates-for-macos-11-big-sur-and-m1-chip-based-macs/',
        ],
        'Screenflow' => 'no',
        'OBS' => 'yes',
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
                <a @click="open = true" class="inline-block px-3 text-white bg-blue-500 rounded cursor-pointer hover:text-white hover:bg-blue-700">i</a>
                <div
                    class="absolute p-4 -mt-2 -ml-1 bg-white border border-gray-500 rounded"
                    x-show="open"
                    x-cloak
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
