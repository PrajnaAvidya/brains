##brain wallet stealer##
- uses brainwallet.org source + CryptoJS + bitcoinjs
- put your word/phrase list in wordlist.txt (one per line) and then load index.html with javascript enabled and it will generate a list of bitcoin addresses and private keys. put those in addresses.csv and run check.php to check if any of the addresses have a balance using the blockchain API.
- will take a while for 1000+ addresses. stick to batches of 5000 or less so as not to crash your browser
- I'm not a crypto programmer so just adopted what other people made. would love to redo this in a lower level language so its not running in javascript in a browser.
- note: this is obsolete for new brain wallets until its updated to work with the new secret exponent feature on brainwallet.
- todo: rewrite in pure js
- todo: add other brain wallet genearation algorithms
