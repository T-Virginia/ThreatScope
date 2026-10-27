<!DOCTYPE html>
<html lang="it">

<x-head />

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">
    <x-navbar />

    <main class="mx-auto max-w-7xl px-6 py-10">
        <p>Effettua il login</p>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label for="email">Inserisci la tua email</label>
            <input type="email" id="email" name="email" autocomplete="email" placeholder="rossi@tuosito.it"
                required>
            <label for="password">Inserisci la tua password</label>
            <input type="password" id="password" name="password" autocomplete="current-password" required>
            <input type="checkbox" id="remember" name="remember" value="1">Ricordami
            <button type="submit">Accedi</button>
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
