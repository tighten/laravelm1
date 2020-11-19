@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-8 lg:flex-row lg:mb-12">
        <div class="mt-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>
{{--             <div class="flex my-10">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

                <a href="https://jigsaw.tighten.co" title="Jigsaw by Tighten" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">About Jigsaw</a>
            </div> --}}

            <p class="text-lg">Green is yes; red is no; grey hasn't been tested yet.</p>
            <p>Source here, in case you want to make PRs: <a href="https://github.com/tighten/laravelm1">github.com/tighten/laravelm1</a></p>
            <p>Another resource here: https://roaringapps.com/collections/list-of-apple-silicon-native-apps</p>
        </div>
    </div>

    <hr class="block my-8 border lg:hidden">

    <h2>Laravel Command-line tools</h2>
    <ul>
        <li>@include('_partials.yay')Laravel Installer</li>
    </ul>

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

    @include('_partials.live-blog')

</section>
@endsection
