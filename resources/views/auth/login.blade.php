
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPPS | Staff Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f6f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .login-card {
            background: white;
            padding: 32px;
            width: 340px;
            border-radius: 12px;
            box-shadow: 0 6px 24px #00000012;
        }
        h1 { color: #176b43; margin-bottom: 8px; }
        p { color: #667085; }
        label { display: block; margin-top: 18px; }
        input {
            box-sizing: border-box;
            width: 100%;
            padding: 11px;
            margin-top: 7px;
            border: 1px solid #ccd5ce;
            border-radius: 6px;
        }
        button {
            width: 100%;
            margin-top: 24px;
            padding: 12px;
            background: #176b43;
            color: white;
            border: 0;
            border-radius: 6px;
            cursor: pointer;
        }
        .error { color: #b42318; font-size: 14px; }
    </style>
</head>
<body>
    <main class="login-card">
        <h1>NPPS</h1>
        <p>Office Management System</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Official email</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
            >

            <label for="password">Password</label>
            <input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
            >

            <label>
                <input type="checkbox" name="remember" value="1"
                    style="width:auto">
                Remember me
            </label>

            <button type="submit">Sign in</button>
        </form>
    </main>
</body>
</html>