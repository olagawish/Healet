<!DOCTYPE html>
<html>

<head>
@include('includes.head')

</head>

<body>

  <!-- header section strats -->
  @include('includes.innerHeader')
  <!-- end header section -->

  <!-- about section -->

  @yield('about')

  <!-- end about section -->

  @yield('shop')
  @yield('blog')

  <!-- info section -->
  @include('includes.info')

  <!-- end info_section -->


  <!-- footer section -->
  @include('includes.footer')
  <!-- footer section -->


  @include('includes.js')

</body>

</html>