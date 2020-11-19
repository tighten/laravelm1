@php
$categories = [
    'Laravel Command-line tools' => [
        'Laravel Installer' => 'yay',
    ],
    'Laravel-ancillary command-line tools' => [
        'PHP' => 'yay',
        'Vim' => 'yay',
        'Composer' => 'yay',
        'Homebrew' => 'dunno',
        'npm' => 'dunno',
        'nvm' => 'dunno',
        'Lambo' => 'yay',
        'oh-my-zsh' => 'yay',
        'Redis' => 'dunno',
    ],
];
@endphp

{{-- @foreach ($categories as $name => $tools)
    <h2>{{ $name }}</h2>
    <ul>
    @foreach ($tools as $toolName => $partial)
        <li>@include('_partials.' . $partial){{ $toolName }}</li>
    @endforeach
    </ul>
@endforeach --}}

<h2>Laravel-ancillary command-line tools</h2>
<ul>
    <li>@include('_partials.yay')PHP</li>
    <li>@include('_partials.yay')Vim</li>
    <li>@include('_partials.yay')Composer</li>
    <li>@include('_partials.dunno')Homebrew</li>
    <li>@include('_partials.dunno')npm</li>
    <li>@include('_partials.dunno')nvm</li>
    <li>@include('_partials.yay')Lambo</li>
    <li>@include('_partials.yay')oh-my-zsh</li>
    <li>@include('_partials.dunno')Redis</li>
</ul>

<h2>Laravel internal tools</h2>
<ul>
    <li>@include('_partials.yay')Artisan</li>
    <li>@include('_partials.yay')Tinker</li>
    <li>@include('_partials.dunno')Horizon</li>
</ul>

<h2>Laravel development environments</h2>
<ul>
    <li>@include('_partials.dunno')Laravel Valet</li>
    <li>@include('_partials.dunno')Laravel Homestead</li>
</ul>

<h2>Docker-based tools</h2>
<ul>
    <li>@include('_partials.dunno')Docker</li>
    <li>@include('_partials.dunno')Vessel</li>
    <li>@include('_partials.dunno')Takeout</li>
</ul>

<h2>Common macOS tools used by Laravel developers</h2>
<ul>
    <li>@include('_partials.yay')iTerm</li>
    <li>@include('_partials.yay')Tinkerwell</li>
    <li>@include('_partials.dunno')Sublime Text</li>
    <li>@include('_partials.dunno')VS Code</li>
    <li>@include('_partials.dunno')PHPStorm</li>
    <li>@include('_partials.dunno')TablePlus</li>
    <li>@include('_partials.dunno')GitHub Desktop</li>
    <li>@include('_partials.dunno')Slack</li>
    <li>@include('_partials.dunno')Discord</li>
    <li>@include('_partials.dunno')Trello</li>
    <li>@include('_partials.dunno')Rocket</li>
    <li>@include('_partials.dunno')Parallels</li>
    <li>@include('_partials.dunno')Rogue Amoeba tools</li>
    <li>@include('_partials.dunno')Adobe Audition</li>
    <li>@include('_partials.dunno')Screenflow</li>
    <li>@include('_partials.dunno')OBS</li>
    <li>@include('_partials.yay')Karabiner Elements</li>
    <li>@include('_partials.dunno')Invoker</li>
</ul>
