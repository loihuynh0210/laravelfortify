<div class="row">
    <div class="col-md-6">
        <h2>Search</h2>
        <div class="form-group">
            <input wire:model.defer="searchName" type="text" class="form-control">
            <input wire:model.defer="searchEmail" type="text" class="form-control">
            {{-- <button wire:click="searchContact()" class="btn btn-primary">Submit</button> --}}
            <button wire:click="$emit('postSearch')" class="btn btn-primary">Submit</button>
            <button wire:click="$emit('postItems', {{$contact->id??''}})" class="btn btn-primary">Items</button>
        </div>
    </div>
</div>
