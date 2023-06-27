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

![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/a1f87020-f1ee-4185-9d8d-dc161653dd42)

![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/1275ec9a-3d14-489e-a952-5d014118ffee)

![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/d6315bd7-8cab-471a-950d-32104a0d233f)


# Diagramme de classes

![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/98f418de-89e8-42cb-8d12-a80dfc9e197f)

# Interfaces
![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/ca238a99-dd41-4806-a3aa-b7f12a3003c5)
![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/4d766366-1d6f-44d5-b042-0ea537e2453c)
![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/ea0bfae3-0c1d-47cd-b5c2-9ab2335ec736)
![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/b4637297-9c8e-49d4-985b-b5647903ca1d)
![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/88f2f9cb-b9ff-4796-bc34-35657908bab9)
![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/2f8d981f-49d4-4c47-9403-f86f24c19999)
![image](https://github.com/loukili-imane/gestion-de-la-relation-client/assets/93887037/8e10b34b-4373-4895-9168-e4376d0ccc99)





