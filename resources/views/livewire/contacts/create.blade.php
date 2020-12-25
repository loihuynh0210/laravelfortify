<div>
    <h2>New Contact</h2>
    <div class="form-group">
        <label for="email">Name:</label>
        <input wire:model="name" type="text" class="form-control">
        @error('name') <span class="alert-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="pwd">Photo:</label>
        {{-- <div
            x-data="{ isUploading: false, progress: 0 }"
            x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false"
            x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress"
        >
            <!-- File Input -->
            <input type="file" wire:model="photo">

            <!-- Progress Bar -->
            <div x-show="isUploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div> --}}
        <input type="file" wire:model="photo" class="form-control">
        <div wire:loading wire:target="photo">Uploading...</div>
        @error('photo') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="pwd">Phone:</label>
        <input wire:model="phone" type="text" class="form-control">
        @error('phone') <span class="alert-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="pwd">Email:</label>
        <input wire:model="email" type="text" class="form-control">
        @error('email') <span class="alert-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="pwd">Message:</label>
        <input wire:model="message" type="text" class="form-control">
        @error('message') <span class="alert-danger">{{ $message }}</span> @enderror
    </div>
    <button wire:click="store()" class="btn btn-primary">Save</button>
</div>
{{-- <script>
    let file = document.querySelector('input[type="file"]').files[0]

    // Upload a file:
    @this.upload('photo', file, (uploadedFilename) => {

        // Success callback.
    }, () => {
        // Error callback.
    }, (event) => {
        // Progress callback.
        // event.detail.progress contains a number between 1 and 100 as the upload progresses.
    })

    // Upload multiple files:
    @this.uploadMultiple('photos', [file], successCallback, errorCallback, progressCallback)

    // Remove single file from multiple uploaded files
    @this.removeUpload('photos', uploadedFilename, successCallback)
</script> --}}
