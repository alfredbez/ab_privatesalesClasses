Private Sales :: erlaubte Klassen
=============================
Im OXID eShop hat man die Möglichkeit, dass System erst nach dem Login vollständig
für Benutzer zur Verfügung zu stellen ("Private Sales").

Wenn diese Option aktiviert ist, haben nicht eingeloggte Benutzer nur einen stark
eingeschränkten Zugang zum Shop. Es dürfen nur folgende Klassen geladen werden:
* register
* forgotpwd
* content
* account
* clearcookies
* oxwServiceMenu

Sollte eine Klasse aufgerufen werden, die nicht erlaubt ist, wird der Benutzer umgeleitet,
um sich einzuloggen (Controller "account").

Mit diesem Modul ist es möglich, erlaubte Klassen für Private Sales zu definieren.

Installation
------------

1.    Herunterladen
 * [download als zip](https://github.com/alfredbez/ab_privatesalesClasses/archive/master.zip) und entpacken
 * ODER
 * mit `git clone` herunterladen ```git clone https://github.com/alfredbez/ab_privatesalesClasses.git```
2.    Inhalt von 'copy_this'-Ordner vollständig kopieren
3.    Modul im OXID Backend aktivieren

----

Nach dem Upload sollte die Ordnerstruktur ungefähr so aussehen:

```
├── index.php
├── bootstrap.php
├── config.inc.php
├── ...
└── modules
    └── ab_privatesalesClasses
        ├── ab_privatesalesClasses_oxcmp_user.php
        └── metadata.php
```
