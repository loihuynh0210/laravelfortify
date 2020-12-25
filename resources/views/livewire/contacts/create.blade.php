<div>
    <h2>New Contact</h2>
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
    <button wire:click="store()" class="btn btn-primary">Save</button>
</div>
