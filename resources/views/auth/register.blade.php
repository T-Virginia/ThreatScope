<!DOCTYPE html>
<html lang="it">

<x-head />

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">
    <x-navbar />

    <main class="mx-auto max-w-7xl px-6 py-10">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <p>Registrati</p>
            <label for="name">Inserisci il tuo nome</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Inserisci la tua email</label>
            <input type="email" id="email" name="email" placeholder="rossi@tuosito.it" required>
            <label for="password">Inserisci la tua password</label>
            <input type="password" id="password" name="password" required>
            <label for="password_confirmation">Conferma la tua password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
            <button type="submit">Registrami</button>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endif
        </form>
        <x-footer />
    </main>
</body>

</html>
