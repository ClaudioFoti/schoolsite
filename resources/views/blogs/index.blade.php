<x-site-layout>
    <div class="container mx-auto w-2/4 space-y-6 mt-10">
        @forelse($blogs as $blog)
            <x-blog-component :blog="$blog"/>
        @empty
            No blogs yet!
        @endforelse
    </div>
</x-site-layout>
