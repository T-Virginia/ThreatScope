# ThreatScope API

## Autenticazione

L'API utilizza Laravel Sanctum per autenticare le richieste tramite token Bearer.

Per gli endpoint protetti, inviare il token nell'header HTTP:

`Authorization: Bearer YOUR_API_TOKEN`

## Consultare i risultati di un indirizzo IP

**Endpoint:** `GET /api/threats/{ip}`

Recupera i risultati già salvati per un indirizzo IP, appartenenti all'utente autenticato.

### Parametri del percorso

| Parametro | Tipo   | Descrizione                      |
| --------- | ------ | -------------------------------- |
| `ip`      | string | Indirizzo IPv4 o IPv6 da cercare |

### Esempio di richiesta

```bash
curl -i \
  -H "Accept: application/json" \
  -H "Authorization: Bearer YOUR_API_TOKEN" \
  http://127.0.0.1:8000/api/threats/8.8.8.8
```

Sostituire `YOUR_API_TOKEN` con un token valido. Non inserire mai token reali nella documentazione pubblica.

### Risposte HTTP

| Codice                      | Significato            | Quando si verifica                                                                           |
| --------------------------- | ---------------------- | -------------------------------------------------------------------------------------------- |
| `200 OK`                    | Richiesta riuscita     | L'indirizzo IP è valido e i risultati sono presenti nella cronologia dell'utente autenticato |
| `401 Unauthorized`          | Utente non autenticato | Il token manca o non è valido                                                                |
| `404 Not Found`             | Risorsa non trovata    | Non esiste un risultato salvato per quell'IP nella cronologia dell'utente autenticato        |
| `422 Unprocessable Content` | Dati non validi        | L'indirizzo IP non supera la validazione                                                     |

### Esempio di risposta positiva

```json
{
    "success": true,
    "message": "IP trovato.",
    "data": {
        "id": 6,
        "ip_address": "1.1.1.1"
    }
}
```

L'identificativo e l'indirizzo IP sono esempi: i valori effettivi dipendono dai dati presenti nel database.
