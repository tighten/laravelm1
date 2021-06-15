@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl px-6 py-10 mx-auto md:py-12">
    <div class="flex flex-col-reverse mb-8 lg:flex-row lg:mb-12">
        <div class="mt-8">
            <h1>{{ $page->siteName }}</h1>
            <p class="mt-2">Last update: {{ date('M j, Y') }}</p>

            <p>Documenting the experience of working on an m1 Apple computer as a Laravel programmer.</p>

            <h3>Links</h3>
            <ul class="ml-6 list-disc">
                <li><a href="https://armshaming.space/">ARM Shaming:</a> listing all Docker repos that don't work on m1</li>
                <li><a href="https://isapplesiliconready.com/">Is Apple Silicon Ready?</a> Broader list of apps ready for m1</li>
                <li><a href="https://github.com/tighten/laravelm1">Source Code</a> for this site</li>
            </ul>
        </div>
    </div>

    <div>
        <h4>Legend</h4>

        <table class="border border-2 border-gray-400">
            <tr>
                <td class="py-1 pl-3">@status('unsure')</td>
                <td class="py-1 pl-3 pr-3">Haven't tested yet</td>
            </tr>
            <tr>
                <td class="py-1 pl-3">@status('no')</td>
                <td class="py-1 pl-3 pr-3">Doesn't work as of testing</td>
            </tr>
            <tr>
                <td class="py-1 pl-3">@status('rosetta')</td>
                <td class="py-1 pl-3 pr-3">Works, through Rosetta 2</td>
            </tr>
            <tr>
                <td class="py-1 pl-3">@status('yes')</td>
                <td class="py-1 pl-3 pr-3">Works natively</td>
            </tr>
        </table>
    </div>

    <hr class="block my-8 border lg:hidden">

    @include('_partials.status')
    @include('_partials.live-blog')
</section>
@endsection
