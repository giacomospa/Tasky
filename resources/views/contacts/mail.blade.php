<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grazie per averci contattato!</title>
</head>
<body>
    <h2>Ciao {{ $contact->name }},</h2>
    <p>Grazie per averci contattato. Abbiamo ricevuto il tuo messaggio e ti risponderemo il prima possibile.</p>
    
    <h4>I tuoi dettagli:</h4>
    <ul>
        <li><strong>Nome:</strong> {{ $contact->name }}</li>
        <li><strong>Email:</strong> {{ $contact->email }}</li>
        <li><strong>Messaggio:</strong> {{ $contact->info }}</li>
    </ul>
    
    <p>Grazie,</p>
    <p>Il team di Tasky</p>
</body>
</html>
