<!DOCTYPE html>
<html lang="en">
 <head>
   @include('admin.layout.partials.head')
 </head>
 <body>

@include('admin.layout.partials.header')


@include('admin.layout.partials.sidebar')


@yield('content')


@include('admin.layout.partials.footer')
 
 </body>
</html>
