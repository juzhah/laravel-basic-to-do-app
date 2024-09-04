<x-layout>
    <x-slot:header> 
      Tasks-App
    </x-slot:header>

    <div class="flex justify-between gap-5 overflow-hidden">

        <x-task.status :tasks="$tasks['to-do']"> To-Do </x-task.status>
        <x-task.status :tasks="$tasks['doing']"> Doing </x-task.status>
        <x-task.status :tasks="$tasks['completed']"> Completed </x-task.status>
    </div>
</x-layout>
