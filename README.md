## MILESTONE 1
La piattaforma pubblica è quella utilizzata dai clienti finali per consultare i prodotti e acquistarli, potrebbe quindi fornire:
1.     Nella homepage la lista dei prodotti disponibili, con delle sezioni per offerte lampo e prodotti più venduti
2.     Carrello e checkout: Gli utenti devono essere in grado di aggiungere prodotti al carrello e confermare l’ordine (pagamento alla consegna). Al completamento dell’ordine i dati dell’utente e i dettagli dell’ordine dovranno essere memorizzati all’interno del nostro sistema
3.     (PLUS) Gestione delle recensioni e valutazioni
## MILESTONE 2
La piattaforma gestionale invece è ad uso interno per amministrare tutto ciò che riguarda l’e-commerce, con queste viste:
1.     Gestione dei prodotti: Deve essere possibile aggiungere, modificare ed eliminare prodotti dal catalogo. Ogni prodotto dovrebbe avere una descrizione dettagliata, immagini e informazioni sul prezzo (vanno previsti flag per offerte lampo e #1 venduto)
2.     Gestione degli utenti: Il sistema dovrebbe consentire agli utenti del gestionale di registrarsi, accedere al loro account, modificare le informazioni personali
3.     Gestione degli ordini: Il sistema dovrebbe consentire al team interno di visualizzare gli ordini dei vari clienti, confermarli/annullarli/chiuderli e permettere la visualizzazione del dettaglio
## MILESTONE 3
Identificare le entità e le relazioni a livello di database. Creare un diagramma E/R (draw.io) - senza perderci un'eternità - che sfrutterete poi per strutturare – in un secondo momento - il database vero e proprio
## MILESTONE 4
Strutturare il database (migrations) e i models seguendo lo schema E/R elaborato in precedenza
## MILESTONE 5
Alle 17.20 circa iniziare a lavorare insieme seguendo il flusso visto oggi con push sul proprio branch e pull requests
### BONUS (opzionale)
Iniziare a gestire le CRUD per il backoffice - potete anche lavorare sul frontoffice se ne avete voglia (comunque avrete modo di farlo anche le prossime volte)
p.s. di nuovo il link al brief: https://docs.google.com/document/d/1RmI3eu7D5d-jypKMdXzP5y1I1zPbTP6ZYDBTo9sMSL0/edit?usp=sharing
## MILESTONE 6
Ricreare il progetto laravel per inserire quanto necessario per gestire l’autenticazione degli utenti. Mostrare la lista degli utenti della piattaforma gestionale nello stesso in modo da visualizzare ruolo, email e nome degli stessi
## MILESTONE 7
Gestire visualizzazione e CRUD degli utenti che inseriranno i propri dati per procedere con gli acquisti (anagrafica, email, fatturazione)
## MILESTONE 8
Gestire visualizzazione e CRUD degli ordini che inseriranno i clienti nel portale con tutte le info necessarie
## MILESTONE 9
Gestite tutte le logiche per essere pronti col frontoffice, come da brief:
-    Listato di tutti i prodotti disponibili
-    Sezione prodotti “offerta lampo”
-    Sezione prodotti “#1 venduto”
-    Creare la logica di dettaglio prodotto e visualizzazione carrello (una soluzione potrebbe essere che al click sul prodotto si apre un popup coi dettagli dello stesso e il bottone per aggiungerlo al carrello. Allo stesso modo cliccando poi sul carrello si aprirà un popup con il riepilogo e il bottone per la conferma ordine)
NOTA:
In generale seguite il documento (https://docs.google.com/document/d/1RmI3eu7D5d-jypKMdXzP5y1I1zPbTP6ZYDBTo9sMSL0/edit?usp=sharing) in modo da completare più funzionalità possibili.
# p.s.
nell'affrontare il frontoffice tenete conto che non avete ancora gestito le API con Laravel quindi per ora potrete solo struttura il layout e utilizzare eventualmente dei dati fake (modificato) 