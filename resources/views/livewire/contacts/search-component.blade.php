<div class="row">
    <div class="col-md-6">
        <h2>Search</h2>
        <div class="form-group">
            <input wire:model="searchName" type="text" class="form-control">
            <input wire:model="searchEmail" type="text" class="form-control">
            <button wire:click="searchContact()" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
