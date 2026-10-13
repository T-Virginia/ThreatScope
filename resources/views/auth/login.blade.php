<div>
    <main>
        <p>Effettua il login</p>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label for="email">Inserisci la tua email</label>
            <input type="email" id="email" name="email" autocomplete="email" placeholder="rossi@tuosito.it" required>
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
    </main>
</div>
