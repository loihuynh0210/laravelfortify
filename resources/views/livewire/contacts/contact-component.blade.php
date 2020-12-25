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

    <div class="row" style="margin-top: 20px">
        <table class="table table-bordered table-condensed">
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>PHONE</td>
                <td>EMAIL</td>
                <td>ACTION</td>
            </tr>
            @foreach($contact_lead as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{$row->email}}</td>
                    <td width="150">
                        <button wire:click="edit({{ $row->id }})" class="btn btn-xs btn-primary">Edit</button>
                        <button wire:click="destroy({{ $row->id }})" class="btn btn-xs btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $contact_lead->links('vendor.livewire.bootstrap') }}
    </div>
</div>
