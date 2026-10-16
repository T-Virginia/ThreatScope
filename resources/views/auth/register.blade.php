<div>
    <main>
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
    </main>
</div>
