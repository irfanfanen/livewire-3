<div>

    <x-flash-msg />

    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title">New Post</h5> --}}
    
            <form wire:submit="save">
                {{-- <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" wire:model="form.title" class="form-control" id="title"></input>
                    @error('form.title')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div> --}}
                <div class="mb-2">
                    <label for="body" class="visually-hidden">Body</label>
                    <textarea placeholder="what's on your mind?" wire:model="form.body" class="form-control"></textarea>
                    @error('form.body')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="flex justify-content-end">
                    <button class="btn btn-primary">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>