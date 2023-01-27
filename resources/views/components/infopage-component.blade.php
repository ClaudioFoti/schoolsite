<div>
    <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="{{$infopage->getMedia()[0]->getFullUrl()}}" class="mb-4" />
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$infopage->title}}</h5>
        <p class="font-normal text-gray-900 dark:text-gray-50">
            Responsible person: {{$infopage->responsible->name ?? 'Unknown'}}
        </p>
        <p class="font-normal text-gray-700 dark:text-gray-400">
            {{$infopage->text}}
        </p>

        @if($renderLink)
            <a class="mt-4 inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" href="{{route('infopages.show',$infopage->id)}}">Open</a>
        @endif
    </div>
</div>
