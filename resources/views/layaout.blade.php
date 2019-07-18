@include('layout.title')
  <body class="background">

    @include('layout.new')

	
    <div>
    @include('layout.sidenav')
  </div>

     @yield('content')

</body>
   
    @include('layout.footer')
</html>