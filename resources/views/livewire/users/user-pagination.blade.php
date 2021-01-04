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

    {{ $users->links('vendor.livewire.bootstrap') }}

    <div x-data="{open: false}">
        <button @click="open=true"> Mở menu thả xuống </button>

        <ul
            x-show="open"
             @click.away="open=false"
         >
            Nội dung thả xuống
        </ul>
    </div>

    <div x-data="{tab: 'foo'}">
        <button :class="{'active': tab === 'foo'}" @click="tab='foo' "> Foo </button>
        <button :class="{'active': tab === 'bar'}" @click="tab='bar' "> Thanh </button>

        <div x-show="tab === 'foo' "> Tab Foo </div>
        <div x-show="tab === 'bar' "> Thanh tab </div>
    </div>

    <div x-data="{open: false}">
        <button
            @mouseenter.once ="
                fetch('https://jsonplaceholder.typicode.com/todos/1').then
                    (response => response.json())
                    .then(json=>{$refs.dropdown.innerHTML=json.title})
             "
             @click ="open=true"
         > Hiển thị menu thả xuống </button>

        <div x-ref="dropdown" x-show ="open" @click.away ="open = false">
            Đang tải Spinner ...
        </div>
    </div>

</div>
