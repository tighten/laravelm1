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
            <p>Another resource here: <a href="https://roaringapps.com/collections/list-of-apple-silicon-native-apps">https://roaringapps.com/collections/list-of-apple-silicon-native-apps</a></p>
        </div>
    </div>

    <div>
        Legend:

        <table>
            <tr><td>Haven't tested yet</td><td class="bg-gray-400">&nbsp;&nbsp;&nbsp;</td></tr>
            <tr><td>Doesn't work as of testing</td><td class="bg-red-500"></td></tr>
            <tr><td>Works, through Rosetta 2</td><td class="bg-blue-500"></td></tr>
            <tr><td>Works natively</td><td class="bg-green-500"></td></tr>
        </table>
    </div>

    <hr class="block my-8 border lg:hidden">

    @include('_partials.status')
    @include('_partials.live-blog')
</section>
@endsection
