<div class="w-full ">
    <p class="text-xl font-bold">To-Do</p>
    @if (Arr::has($tasks, 'to-do'))
        <div class="mt-5 h-3/4 overflow-scroll">
            @foreach ($tasks['to-do'] as $task)
                <x-task.task-card :task="$task"></x-task.task-card>
            @endforeach
        </div>
    @else
        <p class="text-gray-400 text-sm pt-6">You don't have any tasks.</p>
    @endif
</div>

<div class="w-full ">
    <p class="text-xl font-bold">Doing</p>
    @if (Arr::has($tasks, 'doing'))
        <div class="mt-5 h-3/4 overflow-scroll">
            @foreach ($tasks['doing'] as $task)
                <x-task.task-card :task="$task"></x-task.task-card>
            @endforeach
        </div>
    @else
        <p class="text-gray-400 text-sm pt-6"> Start with a task.</p>
    @endif
</div>

<div class="w-full ">
    <p class="text-xl font-bold">Completed</p>
    @if (Arr::has($tasks, 'completed'))
        <div class="mt-5 h-3/4 overflow-scroll">
            @foreach ($tasks['completed'] as $task)
                <x-task.task-card :task="$task" :completed="true" ></x-task.task-card>
            @endforeach
        </div>
    @else
        {{--  --}}
    @endif
</div>
