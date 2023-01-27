<x-site-layout>
    <div class="p-4">
    <div class="w-1/2 mx-auto p-4 bg-white rounded-lg flex flex-col items-center gap-3">
        <header>
            <h1 class="font-bold text-2xl">Info Pages</h1>
        </header>

        @forelse($infopages as $infopage)
            <x-infopage-component :infopage="$infopage" :render-link="true"/>
        @empty
            No info pages yet!
        @endforelse
    </div>
    </div>
</x-site-layout>
