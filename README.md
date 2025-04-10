# Tasky

## Descrizione del Progetto
Tasky è una piattaforma per freelance del settore tech che consente di mettere in vendita i propri servizi professionali. La piattaforma offre un'esperienza completa sia per gli utenti non autenticati che per quelli autenticati, con funzionalità che vanno dall'esplorazione dei servizi alla gestione del carrello.

## Tecnologie Utilizzate
- HTML
- CSS
- JavaScript
- Bootstrap
- PHP
- Laravel
- Livewire
- MySQL
- Mailtrap (per test email)

## Funzionalità Principali

### Utenti Non Autenticati
- Esplorare i servizi disponibili (anteprima)
- Visualizzare le recensioni dei clienti
- Compilare e inviare un form per richiedere maggiori informazioni sui servizi

### Utenti Autenticati
- Accesso completo ai dettagli dei servizi (descrizione completa, prezzo, venditore)
- Aggiungere servizi al carrello
- Lasciare recensioni sui servizi acquistati
- Gestire i propri servizi (modifica/eliminazione)
- Aggiungere nuovi servizi tramite form con validazione
- Caricare immagini personalizzate per i servizi (con supporto per file di grandi dimensioni)

### Dashboard Profilo
- Sezione "Servizi" con elenco dei servizi creati dall'utente
- Sezione "Recensioni" con tutte le recensioni pubblicate dall'utente
- Carrello con elenco degli articoli selezionati per l'acquisto

### Altre Caratteristiche
- Form con validazione e messaggi personalizzati
- Notifiche di conferma per operazioni completate con successo
- Icona del carrello dinamica (cambia aspetto quando contiene elementi)
- Design completamente responsive per dispositivi mobile

## Come Installare e Configurare

### Requisiti
- PHP >= 8.0
- Composer
- MySQL

### Passi per l'Installazione
1. Clonare il repository
   ```
   git clone https://github.com/tuoutente/tasky.git
   cd tasky
   ```

2. Installare le dipendenze PHP
   ```
   composer install
   ```

3. Installare Bootstrap tramite NPM (se non incluso nelle dipendenze composer)
   ```
   npm install bootstrap
   ```

4. Copiare il file di ambiente e configurarlo
   ```
   cp .env.example .env
   ```

5. Generare una chiave dell'applicazione
   ```
   php artisan key:generate
   ```

6. Configurare il database nel file `.env`
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tasky
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. Configurare Mailtrap nel file `.env` (per i test email)
   ```
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.mailtrap.io
   MAIL_PORT=2525
   MAIL_USERNAME=tuousername
   MAIL_PASSWORD=tuapassword
   MAIL_ENCRYPTION=tls
   ```

8. Eseguire le migrazioni e i seeder
   ```
   php artisan migrate --seed
   ```

9. Compilare gli asset (se utilizzi Laravel Mix/Vite)
   ```
   npm run dev
   ```

10. Avviare il server
    ```
    php artisan serve
    ```

11. Accedere all'applicazione in `http://localhost:8000`

## Screenshots

[Qui puoi inserire screenshot della tua applicazione per mostrare l'interfaccia e le funzionalità principali]

## Informazioni sull'Autore
Questo progetto è stato sviluppato come dimostrazione di competenze tecniche dopo la partecipazione ad Hackademy.