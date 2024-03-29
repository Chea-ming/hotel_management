<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    
    @if ($errors->any())
        <div style="color: red;">
            {{ $errors->first('message') }}
        </div>
    @endif
    
    <form method="POST" action="{{ url('/login') }}">
        @csrf
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
