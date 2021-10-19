<!DOCTYPE html>
<html lang="en">

<head>
        <title>Login</title>
        <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
</head>

<body>
<main class="login">
    <header>
        <h1>Login</h1>
    </header>

    <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <label>
           <p>E-mail</p> <input type="text" name="email" required />
        </label><br /> <br />
        <label>
           <p>Password</p> <input type="password" name="password" required />
        </label><br /> <br />
        <button class="submit" type="submit">Login</button>
        @error('credentials')
            <div class="warn">{{ $message }}</div>
        @enderror
        </form>
</main>

    <footer>
    Welcome to website k-pop!
    </footer>
</main>
</body>
</html>