<x-instructor-layout :course="$course">

    <h1 class="text-2xl font-bold">{{ __('OBOSERVACIONES DEL CURSO')}}</h1>
    <hr class="mt-2 mb-6">

    <div>
        {!!$course->observationCourse->body!!}

        <h1 class="mt-8">{{('Atentamente,')}}</h1>
        {{$course->teacher->name}}
    </div>

</x-instructor-layout>