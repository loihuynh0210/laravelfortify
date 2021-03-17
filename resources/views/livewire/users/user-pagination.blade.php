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

    <div x-data="{ visible : {{$isVisible}} }">
      <p x-show="visible">Awesome!</p>
      <button wire:click="setVisibleTrue()">Show</button>
      <button wire:click="$set('isVisible', false)">Show</button>
  </div> 

    <div>
      <form action="" x-data="form()" x-init="init()" @focusout="change" @input="change" @submit="submit">
        <h1>Register</h1>

        <label for="username">Username</label>
        <input name="username" id="username" type="text" x-bind:class="{'invalid':username.errorMessage}" data-rules='["required"]' data-server-errors='[]'>
        <p class="error-message" x-show.transition.in="username.errorMessage" x-text="username.errorMessage"></p>

        <label for="email">Email</label>
        <input name="email" type="email" id="email" x-bind:class="{'invalid':email.errorMessage}" data-rules='["required","email"]' data-server-errors='[]'>
        <p class="error-message" x-show.transition.in="email.errorMessage" x-text="email.errorMessage"></p>

        <label for="password">Password</label>
        <input name="password" type="password" id="password" x-bind:class="{'invalid':password.errorMessage}" data-rules='["required","minimum:8"]' data-server-errors='[]'>
        <p class="error-message" x-show.transition.in="password.errorMessage" x-text="password.errorMessage"></p>

        <label for="passwordConf">Confirm Password</label>
        <input name="passwordConf" type="password" id="passwordConf" x-bind:class="{'invalid':passwordConf.errorMessage}" data-rules='["required","minimum:8","matchingPassword"]' data-server-errors='[]'>
        <p class="error-message" x-show.transition.in="passwordConf.errorMessage" x-text="passwordConf.errorMessage"></p>

        <input type="submit">
      </form>
    </div>
    <style type="text/css">
      * {
        font-family: "Inter", sans-serif;
      }
      form {
        width: 30%;
        min-width: 350px;
        margin: auto;
      }
      label {
        font-size: 1.5em;
      }

      input {
        width: 100%;
        display: block;
        font-size: 2em;
        border: solid 4px;
        border-color: hsl(210, 100%, 30%);
        margin-bottom: 1.5em;
      }
      input[type="submit"] {
        width: fit-content;
        font-size: 1.5em;
      }
      input[type="submit"]:focus {
        background-color: hsl(210, 100%, 80%);
      }
      .invalid {
        border-color: darkred;
        background-color: hsl(0, 30%, 95%);
        margin-bottom: 0em;
      }
      .error-message {
        margin-bottom: 1em;
        color: hsl(0deg, 100%, 15%);
      }
    </style>

    <script type="text/javascript">
      window.form = () => {
        return {
          inputElements: [],
          init: function () {
            //Set up custom Iodine rules
            Iodine.addRule(
              "matchingPassword",
              (value) => value === document.getElementById("password").value
            );
            Iodine.messages.matchingPassword = "Password confirmation needs to match password";
            //Store an array of all the input elements with 'data-rules' attributes
            this.inputElements = [...this.$el.querySelectorAll("input[data-rules]")];
            this.initDomData();
            this.updateErrorMessages();
          },
          initDomData: function () {
            //Create an object attached to the component state for each input element to store its state
            this.inputElements.map((ele) => {
              this[ele.name] = {
                serverErrors: JSON.parse(ele.dataset.serverErrors),
                blurred: false
              };
            });
          },
          updateErrorMessages: function () {
            //map throught the input elements and set the 'errorMessage'
            this.inputElements.map((ele) => {
              this[ele.name].errorMessage = this.getErrorMessage(ele);
            });
          },
          getErrorMessage: function (ele) {
            //Return any server errors if they're present
            if (this[ele.name].serverErrors.length > 0) {
              return input.serverErrors[0];
            }
            //Check using iodine and return the error message only if the element has not been blurred
            const error = Iodine.is(ele.value, JSON.parse(ele.dataset.rules));
            if (error !== true && this[ele.name].blurred) {
              return Iodine.getErrorMessage(error);
            }
            //return empty string if there are no errors
            return "";
          },
          submit: function (event) {
            const invalidElements = this.inputElements.filter((input) => {
              return Iodine.is(input.value, JSON.parse(input.dataset.rules)) !== true;
            });
            if (invalidElements.length > 0) {
              event.preventDefault();
              document.getElementById(invalidElements[0].id).scrollIntoView();
              //We set all the inputs as blurred if the form has been submitted
              this.inputElements.map((input) => {
                this[input.name].blurred = true;
              });
              //And update the error messages.
              this.updateErrorMessages();
            }
          },
          change: function (event) {
            //Ignore all events that aren't coming from the inputs we're watching
            if (!this[event.target.name]) {
              return false;
            }
            if (event.type === "input") {
              this[event.target.name].serverErrors = [];
            }
            if (event.type === "focusout") {
              this[event.target.name].blurred = true;
            }
            //Whether blurred or on input, we update the error messages
            this.updateErrorMessages();
          }
        };
      };

    </script>


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

    <div x-data="dropdown()">
        <button x-on:click="open">Open</button>

        <div x-show="isOpen()" x-on:click.away="close">
            // Dropdown
        </div>
    </div>
    <script>
      function dropdown() {
          return {
              show: false,
              open() { this.show = true },
              close() { this.show = false },
              isOpen() { return this.show === true },
          }
      }
  </script>

  <div x-data="dropdownspread()">
      <button x-spread="trigger">Open Dropdown</button>

      <span x-spread="dialogue">Dropdown Contents</span>
  </div>
  <script>
      function dropdownspread() {
          return {
              open: false,
              trigger: {
                  ['@click']() {
                      this.open = true
                  },
              },
              dialogue: {
                  ['x-show']() {
                      return this.open
                  },
                  ['@click.away']() {
                      this.open = false
                  },
              }
          }
      }
  </script>

</div>
