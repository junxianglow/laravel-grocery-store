<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to your dashboard, {{ Auth::user()->name }}!</h1>

    <nav>
        <ul>
            <li><a href="{{ route('categories.index') }}">Categories</a></li>
            <li><a href="{{ route('products.index') }}">Products</a></li>
        </ul>
    </nav>

    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>
