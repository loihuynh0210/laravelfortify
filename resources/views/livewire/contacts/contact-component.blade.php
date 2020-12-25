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

    @livewire('contacts.search-component')

    @include('livewire.contacts.contact_lead')

</div>
