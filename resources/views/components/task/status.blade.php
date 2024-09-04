

<div class="w-full ">
    <p class="text-xl font-bold">{{ $slot }}</p>
    <div class="mt-5 h-3/4 overflow-scroll">
        @foreach ($tasks as $task)
            <x-task.task-card :task="$task"></x-task.task-card>
        @endforeach
    </div>
</div>
