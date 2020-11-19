@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>
{{--             <div class="flex my-10">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

                <a href="https://jigsaw.tighten.co" title="Jigsaw by Tighten" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">About Jigsaw</a>
            </div> --}}
        </div>

        <img src="/assets/img/logo-large.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">

    <h2>Laravel Command-line tools</h2>
    <ul>
        <li>Laravel Installer</li>
    </ul>

    <h2>Laravel-ancillary command-line tools</h2>
    <ul>
        <ul>Composer</ul>
        <li>Homebrew</li>
        <li>npm</li>
        <li>nvm</li>
        <li>Lambo</li>
        <li>oh-my-zsh</li>
    </ul>

    <h2>Laravel development environments</h2>
    <ul>
        <li>Laravel Valet</li>
        <li>Laravel Homestead</li>
    </ul>

    <h2>Docker-based tools</h2>
    <ul>
        <li>Vessel</li>
        <li>Takeout</li>
    </ul>

    <h2>Common macOS tools used by Laravel developers</h2>
    <ul>
        <li>Tinkerwell</li>
        <li>Sublime Text</li>
        <li>VS Code</li>
        <li>PHPStorm</li>
        <li>TablePlus</li>
        <li>GitHub Desktop</li>
        <li>Slack</li>
        <li>Discord</li>
        <li>Trello</li>
        <li>Rocket</li>
    </ul>

    <h2>Testing on a brand new machine, having taken these steps:</h2>
    <ul>
        <li>Download iTerm</li>
        <li>Install oh-my-zsh, which prompoted installing the command line developer tools</li>
        <li>Install oh-my-zsh again</li>
        <li>`sudo mkdir /usr/local/bin && chmod 775 /usr/local/bin` and hope that's not the wrong thing to do
        <li>Install composer and move to /usr/local/bin and wonder why i have to sudo it (`sudo mv composer.phar /usr/local/bin/composer`)</li>

    </ul>

</section>
@endsection
