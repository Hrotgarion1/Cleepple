<x-instructor-layout :course="$course">


   <div>
       {{-- Concateno el key del componente para que sea unico con el nombre del componente --}}
       @livewire('instructor.courses-goals', ['course' => $course], key('courses-goals' . $course->id))
   </div>

   <div class="my-8">
    @livewire('instructor.courses-requirements', ['course' => $course], key('courses-requirements' . $course->id))
   </div>

   <div>
    @livewire('instructor.courses-audiences', ['course' => $course], key('courses-audiences' . $course->id))
   </div>

</x-instructor-layout>