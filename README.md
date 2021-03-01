**PHP TP3 Symfony DIM - Antoine Bouvard**

**Q1 : Quelles sont les fonctionnalités principales du Symfony CLI ?**
- Une façon de créer de nouvelles applications Symfony
- Un serveur local pour développer des projets
- Un outil pour vérifier les failles de sécurité


**Q2 : Quelles relations existent entre les entités (Many To One/Many To Many/...) ? Faire un schéma de la base de données.**
- ManyToOne  : Chaque Utilisateur sont relié à un Commentaire.
               Chaque Commentaire peut être relié à plusieurs objets Utilisateur

- OneToMany  : Chaque Utilisateur peut être relié à plusieurs objets Commentaire .
               Chaque Commentaire sont reliés à un Utilisateur

- ManyToMany : Chaque Utilisateur peut être relié à plusieurs objets Commentaire.
               Chaque Commentaire peut être aussi relié à plusieurs objets Utilisateur.

- OneToOne   : Chaque Utilisateur sont reliés à exactement un Commentaire.
               Chaque Commentaire sont aussi reliés à exactement un Utilisateur.
			   
![](https://i.imgur.com/dfOSrix.png)