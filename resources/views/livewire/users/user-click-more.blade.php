<div class="scrolling-pagination">
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

    <button wire:click="load">もっと読み込む</button>

</div>
