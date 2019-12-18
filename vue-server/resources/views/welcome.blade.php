<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Dashboard</h2>
   @if(Session::has('userid') && Session::has('userrole') && Session::get('userrole')=='student')
    <ul>
        <li><a href="">View CT Marks</a></li>
        <li><a href="">View Class Routine</a></li>
    </ul>
   @else
    <ul>
        <li><a href="">Create CT</a></li>
        <li><a href="">Enter CT Marks</a></li>
    </ul>
   @endif
    
</body>
</html>