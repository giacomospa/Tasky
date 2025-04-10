# 🚀 Tasky

## 📋 Descrizione del Progetto

Tasky è una piattaforma innovativa progettata per freelance del settore tech che desiderano mettere in vendita i propri servizi professionali. La piattaforma offre un'esperienza completa e intuitiva, accessibile sia agli utenti non autenticati che a quelli registrati, con funzionalità che spaziano dall'esplorazione dei servizi disponibili alla gestione completa del carrello.

---

## 🛠️ Stack Tecnologico

### Frontend
- HTML5
- CSS3
- JavaScript
- Bootstrap 5

### Backend
- PHP 8+
- Laravel
- Livewire

### Database & Servizi
- MySQL
- Mailtrap (per testing delle email)

---

## ✨ Funzionalità Principali

### 👤 Per Utenti Non Autenticati
- **Esplorazione Servizi**: navigazione e anteprima dei servizi disponibili
- **Sistema di Recensioni**: visualizzazione delle valutazioni e feedback degli utenti
- **Form di Contatto**: possibilità di richiedere informazioni aggiuntive sui servizi offerti

### 🔐 Per Utenti Autenticati
- **Accesso Completo**: visualizzazione di tutti i dettagli dei servizi (descrizioni complete, prezzi, info venditore)
- **Gestione Carrello**: aggiunta e rimozione di servizi dal carrello d'acquisto
- **Sistema di Recensioni**: possibilità di lasciare feedback sui servizi acquistati
- **Gestione Servizi**: creazione, modifica ed eliminazione dei propri servizi offerti
- **Upload Media**: caricamento di immagini personalizzate per i servizi (con supporto per file di grandi dimensioni)

### 📊 Dashboard Personale
- **Sezione Servizi**: panoramica completa dei servizi creati dall'utente
- **Sezione Recensioni**: gestione di tutte le recensioni pubblicate dall'utente
- **Carrello Interattivo**: elenco dettagliato degli articoli selezionati per l'acquisto

### 🌟 Caratteristiche Aggiuntive
- **Validazione Form**: controlli avanzati con messaggi personalizzati
- **Sistema di Notifiche**: conferme per operazioni completate con successo
- **Indicatori Dinamici**: icona del carrello che si aggiorna in base al contenuto
- **Design Responsive**: ottimizzazione completa per tutti i dispositivi mobile

---

## ⚙️ Installazione e Configurazione

### Prerequisiti
- PHP 8.0 o superiore
- Composer
- MySQL
- Node.js e NPM

### Guida all'Installazione

1. **Clonazione del repository**
   ```bash
   git clone https://github.com/tuoutente/tasky.git
   cd tasky
   ```

2. **Installazione dipendenze PHP**
   ```bash
   composer install
   ```

3. **Installazione dipendenze frontend**
   ```bash
   npm install
   ```

4. **Configurazione ambiente**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configurazione database**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tasky
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Configurazione Mailtrap** (per testing email)
   ```
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.mailtrap.io
   MAIL_PORT=2525
   MAIL_USERNAME=your_username
   MAIL_PASSWORD=your_password
   MAIL_ENCRYPTION=tls
   ```

7. **Preparazione database**
   ```bash
   php artisan migrate --seed
   ```

8. **Compilazione assets**
   ```bash
   npm run dev
   ```

9. **Avvio server locale**
   ```bash
   php artisan serve
   ```

10. **Accesso all'applicazione**
    - Visita `http://localhost:8000` nel tuo browser

---

## 👤 Autore

Questo progetto è stato sviluppato come dimostrazione di competenze tecniche.

