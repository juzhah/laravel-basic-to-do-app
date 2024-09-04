@switch($taskLabel)
    @case($taskLabel === 'not urgent')
        <p class="text-green-500 mt-2 w-max py-0.5 px-2 border border-green-400 bg-green-50 rounded-lg text-xs"">
            {{ $slot }}
        </p>
    @break

    @case($taskLabel === 'important')
        <p class="text-yellow-500 mt-2 w-max py-0.5 px-2 border border-yellow-400 bg-yellow-50 rounded-lg text-xs"">
            {{ $slot }}
        </p>
    @break

    @case($taskLabel === 'urgent')
        <p class="text-red-400 mt-2 w-max py-0.5 px-2 border border-red-400 bg-red-50 rounded-lg text-xs"">
            {{ $slot }}
        </p>
    @break
@endswitch
