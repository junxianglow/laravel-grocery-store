<!DOCTYPE html>
<html>
    <head>
        <title>My Grocery Store</title>
    </head>
    <body>
        <h1>Welcome to My Grocery Store</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Use Laravel's built-in authentication views and routes -->
        <div>
            <a href="{{ route('login') }}">Login</a>
        </div>
        <br>
        <div>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </body>
</html>
