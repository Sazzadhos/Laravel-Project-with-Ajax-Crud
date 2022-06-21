
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- Head -->
    @include('backend.includes.head')

    <!-- CSS -->
    @include('backend.includes.css')
    
  </head>

  <body>

    <!-- Side Bar -->
    @include('backend.includes.sidebar')

    <!-- Top Bar -->
    @include('backend.includes.topbar')

    <!-- Right bar -->
    @include('backend.includes.rightbar')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        
    @yield('content')

    <!-- Footer -->
    @include('backend.includes.footer')

    </div><!-- br-pagebody -->
      
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- Java Scripts -->
    @include('backend.includes.scripts')
  </body>
</html>
