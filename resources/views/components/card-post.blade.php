@props(['blogpost'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if ($blogpost->image)
      <img class="w-full h-72 object-cover object-center" src="{{Storage::url($blogpost->image->url)}}" alt="">
    @else
      <img class="w-full h-72 object-cover object-center" src="{{ asset('storage/img/sinFondo.png') }}" alt="">
    @endif

    <div class="px-6 py-4">
        <h1 class="text-4xl text-gray-600 leading-8 font-bold">
            <a href="{{route('posts.show', $blogpost)}}">
                {{$blogpost->name}}
            </a>
        </h1>

        <div class="text-gray-600 text-base">
            {!!$blogpost->extract!!}
        </div>
    </div>

    <div class="px-6 pt-4 pb-2">
        @foreach ($blogpost->profesion as $profesi)
            <a href="{{route('posts.profesion', $profesi)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$profesi->name}}</a>
        @endforeach
    </div>
</article>