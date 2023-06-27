# gestion de la relation client

# Cahier de charge

# Besoins fonctionnels
Besoins fonctionnels
Notre application doit assurer les fonctionnalités suivantes :
````
- La gestion d’accès : chaque utilisateur de l’application possède une interface
propre à lui selon son rôle (administrateur ou utilisateur). Pour y accéder, il doit
s’authentifier avec un email et un mot de passe.
````
````
- Un tableau de bord : il contient des indicateurs clés sur les données enregistrées
dans le système, à savoir le nombre des clients enregistrés, le nombre des groupes,
le nombre des comptes utilisateur actifs dans l’application.
````
````
- La gestion des utilisateurs : l’administrateur de l’application gère les utilisateurs
de l’application. Il peut ajouter un nouvel utilisateur, modifier les informations d’un
utilisateur existant, chercher un utilisateur particulier et désactiver le compte d’un
utilisateur au cas où ce dernier a quitté ou changé son poste.
````
````
- La gestion des clients : l’application permet à ses utilisateurs de gérer les clients de
l’entreprise en enregistrant leurs informations dans la base de données du système,
elle permet aussi de lister tous les clients enregistrés, de modifier leurs
informations, de supprimer un client et de chercher les informations d’un client
particulier.
````
````
- La gestion des groupes : l’application permet de classifier les clients en groupes
selon les critères souhaités par l’entreprise (type de service etc.), chaque client peut
appartenir à un groupe crée par les utilisateurs.
````
````
- La gestion des rendez-vous : chaque rendez-vous est caractérisé par sujet, une
date de début, une date de fin et un statut qui peut être :
        -en cours : c’est l’état par défaut d’un rendez-vous lorsqu’il est ajouté au
système.
        -fait : lorsque le rendez-vous a été lieu, l’utilisateur se connecte à
l’application pour changer l’état du rendez-vous de en cours à fait.
        -annulé : lorsque le client annule le rendez-vous qu’il a pris auparavant.
L’utilisateur a le droit d’ajouter un rendez-vous et de modifier ses détails.
````
# Diagramme de cas d'utilisation

![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/5b7b2917-6504-40b1-adb5-abcf3d26b696)


![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/276d1172-6460-4fcd-8531-d5f665a2df76)

![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/45915408-1d90-480a-bc7a-267fa918c509)

![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/6b38d856-a077-455e-91b7-a5c6908af3fd)



# Diagramme de classes

![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/4592e99f-9bd7-4d5a-8425-a3b064f29320)

# Interfaces

![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/3e4df23c-a12c-4dc5-8d1d-7f63415c6d9e)

![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/cdade12b-ae75-4c6f-8109-15b614a0f0a6)

![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/8b1fdce5-b89e-4960-9f82-d20992ec6fa2)

