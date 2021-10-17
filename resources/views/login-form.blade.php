<!DOCTYPE html>
<html lang="en">

<head>
        <title>Login</title>
        <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
</head>

<body>
<main class="login">
<main>
    <header>
        <h1>Login</h1>
    </header>

    <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <label>
            E-mail <strong>::</strong> <input type="text" name="email" required />
        </label><br /> <br />
        <label>
            Password <strong>::</strong> <input type="password" name="password" required />
        </label><br /> <br />
        <button type="submit">Login</button>
        @error('credentials')
            <div class="warn">{{ $message }}</div>
        @enderror
        </form>
</main>

    <footer>
           
    </footer>
</main>
</body>
</html>