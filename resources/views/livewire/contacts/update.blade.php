<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Update Contact</h3>
    </div>

    <div class="panel-body">
        <div class="form-inline">
            <input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="email">Name:</label>
                <input wire:model="name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="pwd">Phone:</label>
                <input wire:model="phone" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="pwd">Email:</label>
                <input wire:model="email" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="pwd">Message:</label>
                <input wire:model="message" type="text" class="form-control">
            </div>
            <button wire:click="update()" class="btn btn-primary">Update</button>
            <button wire:click="cancel()" class="btn btn-default">Cancel</button>
        </div>
    </div>
</div>
