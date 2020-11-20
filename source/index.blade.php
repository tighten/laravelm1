@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-8 lg:flex-row lg:mb-12">
        <div class="mt-8">
            <h1 >{{ $page->siteName }}</h1>

            <h2 class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p>Source here, in case you want to make PRs: <a href="https://github.com/tighten/laravelm1">github.com/tighten/laravelm1</a></p>
            <p>Another resource here: <a href="https://roaringapps.com/collections/list-of-apple-silicon-native-apps">https://roaringapps.com/collections/list-of-apple-silicon-native-apps</a></p>
        </div>
    </div>

    <div>
        <h4>Legend</h4>

        <table class="border border-gray-400">
            <tr>
                <td class="py-1 pl-3">@status('unsure')</td>
                <td class="py-1 pr-3 pl-3">Haven't tested yet</td>
            </tr>
            <tr>
                <td class="py-1 pl-3">@status('no')</td>
                <td class="py-1 pr-3 pl-3">Doesn't work as of testing</td>
            </tr>
            <tr>
                <td class="py-1 pl-3">@status('rosetta')</td>
                <td class="py-1 pr-3 pl-3">Works, through Rosetta 2</td>
            </tr>
            <tr>
                <td class="py-1 pl-3">@status('yes')</td>
                <td class="py-1 pr-3 pl-3">Works natively</td>
            </tr>
        </table>
    </div>

    <hr class="block my-8 border lg:hidden">

    @include('_partials.status')
    @include('_partials.live-blog')
</section>
@endsection
