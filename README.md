**PHP TP3 Symfony DIM - Antoine Bouvard**
=

**GETTING STARTED**
**Q1 : Quelles sont les fonctionnalités principales du Symfony CLI ?**
- Une façon de créer de nouvelles applications Symfony
- Un serveur local pour développer des projets
- Un outil pour vérifier les failles de sécurité

-
**DOCTRINE**
**Q1 : Quelles relations existent entre les entités (Many To One/Many To Many/...) ? Faire un schéma de la base de données.**
- ManyToOne  : Chaque Utilisateur sont relié à un Commentaire.
               Chaque Commentaire peut être relié à plusieurs objets Utilisateur

- OneToMany  : Chaque Utilisateur peut être relié à plusieurs objets Commentaire .
               Chaque Commentaire sont reliés à un Utilisateur

- ManyToMany : Chaque Utilisateur peut être relié à plusieurs objets Commentaire.
               Chaque Commentaire peut être aussi relié à plusieurs objets Utilisateur.

- OneToOne   : Chaque Utilisateur sont reliés à exactement un Commentaire.
               Chaque Commentaire sont aussi reliés à exactement un Utilisateur.
			   
![](https://i.imgur.com/dfOSrix.png)


**Q2 : Expliquer ce qu'est le fichier .env**
Le fichier .env est généralement utilisé pour définir la configuration d’une application (variables environnements). 
On peut l'utiliser pour renseigner la configuration d’une base de données par exemple.


**Q3 : Expliquer pourquoi il faut changer le connecteur à la base de données**
On décommente SQLite à la palce de Postgresql 
Postgresql est sur le serveur, SQLite sur le client


**Q4 : Expliquer l'intérêt des migrations d'une base de données**
Une migration sert à créer des versions, et donc des sauvegardes de la base de données.

-
**ADMINISTRATION**
**Q1 : Faire une recherche sur les différentes solutions disponibles pour l'administration dans Symfony**























