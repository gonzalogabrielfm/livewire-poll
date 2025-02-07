<div>
    <form wire:submit.prevent="createPoll">

        <label>Poll Title</label>

            <input type="text" wire:model.live="title"/>
        @error('title')
        <div class="text-red-500">
            {{ $message }}
        </div>
        @enderror
        <div class="my-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>



        <div class="mt-4">
            @foreach($options as $index => $option)
                <div class="mb-4">
                    <label>Option {{ $index + 1}} - {{$option}}</label>

                    <div class="flex gap-2">
                        <input type="text" wire:model.live="options.{{$index}}"/>
                        @error("options.{$index}")
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                        <button class="btn" wire:click.prevent="removeOption({{$index}})">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn">Create Poll</button>
    </form>
</div>
