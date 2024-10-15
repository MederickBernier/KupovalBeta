<div class="d-flex justify-content-between align-items-center w-100">
    @if($isEditing)
        <div class="flex-grow-1">
            <input
                type="text"
                class="form-control"
                wire:model.defer="value"
                wire:keydown.enter="updateField"
                wire:blur="updateField"
                autofocus
            >
            @error('value')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    @else
        <div class="flex-grow-1">
            <span>{{ $value }}</span>
        </div>
    @endif
    <i
        class="bi bi-pencil-square ms-2"
        style="cursor: pointer;"
        wire:click="$toggle('isEditing')"
    ></i>
</div>
