<div>
    <a href=" {{route('blogs.show',$blog->id)}}" class="block mx-auto w-3/4 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$blog->title}}</h5>
        <p class="font-normal mb-4 text-gray-700 dark:text-gray-400">
            {{$blog->text}}
        </p>
        <div class="container">
            <img class="w-3/4 mx-auto" src="{{$blog->media->first()?->getUrl()}}">
        </div>
    </a>
</div>
