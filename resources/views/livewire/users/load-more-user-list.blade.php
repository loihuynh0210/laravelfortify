<div class="table-responsive">
    <table class="table table-bordered" style="width: 100%;">
      <thead>
        <tr>
          <th class="px-4 py-2">ID</th>
          <th class="px-4 py-2">Name</th>
          <th class="px-4 py-2">Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users_more as $user)
            <tr>
            <td class="border px-4 py-2">{{ $user->id }}</td>
            <td class="border px-4 py-2">{{ $user->name }}</td>
            <td class="border px-4 py-2">{{ $user->email }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>
