<div>
    <table class="table-auto" style="width: 100%;">
      <thead>
        <tr>
          <th class="px-4 py-2">ID</th>
          <th class="px-4 py-2">Name</th>
          <th class="px-4 py-2">Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
            <tr>
            <td class="border px-4 py-2">{{ $user->id }}</td>
            <td class="border px-4 py-2">{{ $user->name }}</td>
            <td class="border px-4 py-2">{{ $user->email }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>

    {{ $users->links('vendor.livewire.bootstrap') }}

    <!-- <div class="table-responsive">
      <table class="table table-bordered">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
              </tr>
          </thead>
          <tbody>
              @foreach($users_more as $data)
                  <tr>
                      <td>{{ $data->id}}</td>
                      <td>{{ $data->name}}</td>
                      <td>{{ $data->email}}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </div> -->

</div>
