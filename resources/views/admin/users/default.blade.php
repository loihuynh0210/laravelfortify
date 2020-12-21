<!DOCTYPE html>
<html>
<head>
    <title>How To Create Livewire Pagination Example Laravel 8 - phpcodingstuff.com</title>
    @livewireStyles
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.0/tailwind.min.css" /> -->

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
      <!-- Styles -->
      <style>
         html, body {
         background-color: #fff;
         color: #636b6f;
         font-family: 'Nunito', sans-serif;
         font-weight: 200;
         height: 100vh;
         margin: 0;
         }
         .full-height {
         height: 100vh;
         }
         .flex-center {
         align-items: center;
         display: flex;
         justify-content: center;
         }
         .position-ref {
         position: relative;
         }
         .top-right {
         position: absolute;
         right: 10px;
         top: 18px;
         }
         .content {
         text-align: center;
         }
         .title {
         font-size: 84px;
         }
         .links > a {
         color: #636b6f;
         padding: 0 25px;
         font-size: 13px;
         font-weight: 600;
         letter-spacing: .1rem;
         text-decoration: none;
         text-transform: uppercase;
         }
         .m-b-md {
         margin-bottom: 30px;
         }
      </style>

</head>
<body>

<div class="container">
  <div class="card">
    <div class="card-header">
      How To Create Livewire Pagination Example Laravel 8 - phpcodingstuff.com
    </div>
    <div class="card-body">
      @livewire('users.user-pagination')
    </div>
  </div>
  <!-- <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-md-8">
             <div class="card">
                <div class="card-header">
                   <h2>Livewire Load More OnScroll Tutorial Laravel 8 - phpcodingstuff.com</h2>
                </div>
                <div class="card-body">
                   @if (session()->has('message'))
                   <div class="alert alert-success">
                      {{ session('message') }}
                   </div>
                   @endif
                   @livewire('users.user-pagination')
                </div>
             </div>
          </div>
      </div>
  </div>
  @livewireScripts
  <script type="text/javascript">
     window.onscroll = function(ev) {
     if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
     window.livewire.emit('load-more');
     }
     };
  </script>
</div> -->

</body>

@livewireScripts

</html>
