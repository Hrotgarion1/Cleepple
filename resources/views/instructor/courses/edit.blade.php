<x-instructor-layout :course="$course">

    {{-- Le quito el x-slot, ver video 51 del curso --}}
    {{-- <x-slot name="course">
         {{$course->slug}}
    </x-slot> --}}

    <h1 class="text-2xl font-bold">{{ __('INFORMACIÓN DEL CURSO')}}</h1>
    <hr class="mt-2 mb-6">

    {!! Form::model($course, ['route' => ['instructor.courses.update', $course], 'method' => 'put', 'files' => true]) !!}

    @include('instructor.courses.partials.form')

 <div class="flex justify-end">
     {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary cursor-pointer']) !!}
 </div>

    {!! Form::close() !!}

    <x-slot name="js">
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <script src="{{asset('js/instructor/courses/form.js')}}"></script>
    </x-slot>

</x-instructor-layout>