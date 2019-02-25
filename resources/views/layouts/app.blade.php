<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TodoList</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
@include('includes.navbar')
<div class="container">
    @include('includes.messages')
    @yield('content')
</div>

<footer id="footer" class="text-center">
    <p>Copyright &copy; 2017 TodoList</p>
</footer>
</body>
</html>
