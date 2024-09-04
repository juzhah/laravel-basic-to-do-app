<x-layout>
    <x-slot:header> 
      Tasks-App
    </x-slot:header>

    <div class="flex justify-between gap-5 overflow-hidden">
      <x-task.status :tasks='$tasks'>
      </x-task.status>
    </div>
</x-layout>
