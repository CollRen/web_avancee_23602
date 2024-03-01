# Notes de cours - cours 20

## session_start

1. Directement en haut de index.php à la racine de façon à l'avoir pour toutes les pages

## Acid

### Atomicité

Les transactions sont souvent composées de plusieurs instructions. L'atomicité garantit que chaque transaction est traitée comme une seule "unité"

### Cohérence

La cohérence garantit qu'une transaction ne peut faire passer la base de données que d'un état cohérent à un autre, en préservant les invariants de la base de données : toute donnée écrite dans la base de données doit être valide selon toutes les règles définies.

Cela empêche la corruption de la base de données par une transaction illégale. L'intégrité référentielle garantit la relation clé primaire-clé étrangère.

### Isolation

Les transactions sont souvent exécutées simultanément (par exemple, plusieurs transactions lisant et écrivant dans une table en même temps). L'isolation garantit que l'exécution simultanée des transactions laisse la base de données dans le même état que celui qui aurait été obtenu si les transactions avaient été exécutées séquentiellement. L'isolation est le principal objectif du contrôle de la concurrence ; selon le niveau d'isolation utilisé, les effets d'une transaction incomplète peuvent ne pas être visibles pour les autres transactions5.


### Durabilité

La durabilité garantit qu'une fois qu'une transaction a été validée, elle le restera même en cas de défaillance du système (par exemple, une panne de courant ou un crash). Cela signifie généralement que les transactions terminées (ou leurs effets) sont enregistrées dans une mémoire non volatile.