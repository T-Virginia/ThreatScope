# ThreatScope

**Dashboard di Threat Intelligence sviluppata con Laravel.**

ThreatScope è un'applicazione web che permette di verificare la reputazione degli indirizzi IP tramite AbuseIPDB, salvare i risultati nel database e consultare una cronologia personale delle ricerche.

Il progetto nasce con l'obiettivo di approfondire Laravel, lo sviluppo di API REST, l'autenticazione e la sicurezza delle applicazioni web.

## Funzionalità

- Registrazione, login e logout degli utenti.
- Validazione degli indirizzi IPv4 e IPv6.
- Integrazione con l'API di AbuseIPDB.
- Salvataggio dei risultati relativi alla reputazione degli IP in un database MySQL.
- Cronologia delle ricerche separata per utente.
- API REST protetta tramite Laravel Sanctum.
- Gestione degli errori di validazione e dei problemi del servizio esterno.
- Test automatici delle principali funzionalità.

## Tecnologie utilizzate

- **PHP** — linguaggio di programmazione.
- **Laravel** — framework per lo sviluppo dell'applicazione.
- **MySQL** — database relazionale.
- **Eloquent ORM** — gestione dei dati e delle relazioni tra modelli.
- **Laravel Sanctum** — autenticazione tramite token per l'API.
- **AbuseIPDB API** — servizio esterno per la reputazione degli indirizzi IP.
- **PHPUnit** — esecuzione dei test automatici.

## Documentazione API

La documentazione dell'API è disponibile nel file [`docs/API.md`](docs/API.md).

Include le istruzioni per l'autenticazione, la descrizione degli endpoint, gli esempi di richiesta e i principali codici di risposta HTTP.

## Sicurezza

Il progetto include:

- Autenticazione per le rotte web protette.
- Autenticazione dell'API tramite token Bearer.
- Separazione della cronologia in base all'utente autenticato.
- Gestione della chiave API tramite variabili d'ambiente.
- Test automatici per validazione, accesso ai dati, salvataggio dei risultati e gestione degli errori.

## Test automatici

Per eseguire la suite di test, utilizzare il comando:

```bash
php artisan test
```

## Installazione in ambiente locale

1. Clonare il repository.
2. Installare le dipendenze PHP:

    ```bash
    composer install
    ```

3. Creare il file di configurazione locale:

    ```bash
    cp .env.example .env
    ```

4. Generare la chiave dell'applicazione:

    ```bash
    php artisan key:generate
    ```

5. Configurare le credenziali del database e la chiave API di AbuseIPDB nel file `.env`.
6. Eseguire le migrazioni:

    ```bash
    php artisan migrate
    ```

7. Avviare il server di sviluppo:

    ```bash
    php artisan serve
    ```

Le impostazioni del database devono essere adattate all'ambiente locale utilizzato.

**Importante:** non pubblicare il file `.env` e non inserire chiavi API o altre credenziali nei file versionati.

## Crediti e Licenze

- **Immagine nel file Welcome**: Foto di <a href="https://unsplash.com/it/@redaquamedia?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Denny Müller</a> su <a href="https://unsplash.com/it/foto/luce-bianca-e-blu-in-una-stanza-buia-JyRTi3LoQnc?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>.

## Stato del progetto

ThreatScope è un progetto in evoluzione, realizzato per approfondire Laravel e sviluppare competenze pratiche nello sviluppo backend, nelle API REST e nella sicurezza delle applicazioni web.
