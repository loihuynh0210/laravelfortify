<div>
    <div class="row">Laravel - Livewire CRUD</div>
    <div class="row">
        <div class="col-md-6">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Sorry!</strong> invalid input.<br><br>
                <ul style="list-style-type:none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if($updateMode)
                @include('livewire.contacts.update')
            @else
                @include('livewire.contacts.create')
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Search Query String </h2>
            <div class="form-group">
                <input wire:model.defer="search" class="form-control" type="text" placeholder="Search posts by title...">
                <input wire:model.defer="searchEmails" class="form-control" type="text" placeholder="Search posts by title...">
                 <button wire:click="$emit('postSearchQueryString')" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>


    @livewire('contacts.search-component')

    @include('livewire.contacts.contact_lead')

</div>
<script>
    document.addEventListener('livewire:load', function () {
        console.log(11111111);
    })
</script>
