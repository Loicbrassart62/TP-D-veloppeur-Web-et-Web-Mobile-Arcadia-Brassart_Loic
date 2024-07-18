# ÉVALUATION EN COURS DE FORMATION
## Graduate Développeur Web et Web Mobile 


---

## Énoncé

**Votre examen comporte :**

✔ Cet énoncé qui vous présente le sujet de l’épreuve

✔ Une copie à rendre (Excel ou Word) que vous devez télécharger, remplir informatiquement et déposer dans l’espace de dépôt prévu à cet effet.


**Renommer votre copie à rendre Word ou Excel comme suit :**
TP_DWWM_Sept/Oct/Nov/Déc24/Janv/Févr/Mars/Avril25_copiearendre_NOM_Prenom

**Objectifs de l’évaluation :**
L’évaluation en cours de formation que vous allez réaliser a pour vocation de figurer dans votre livret d’évaluation. Il sera donc remis à votre jury le jour des  épreuves du titre professionnel accompagné de votre évaluation et du sujet initial. 

Nous vous demandons de vous mettre en situation d’examen. Prenez le temps de lire le sujet et de manipuler les annexes afin de répondre en situation professionnelle aux questions et problématiques évoquées dans le sujet


### À vous de jouer !


---

## Informations

**Github** : https://github.com/Loicbrassart62/TP_DWWM_Nov-Dec24-copiearendre_BRASSART_Loic

**Démonstration** : <span style="color:red">**Url du site**</span>

    Adresse email démo      : 
    Mot de passe démo       : 

**Trello** : <span style="color:red">**[url du trello](https://trello.com/invite/b/662f3fc9a1272f660ed52479/ATTIa3128884f4bb6fc2ddfe9bdd7ed851cbF02B469D/arcadia-ecf-brassartloic)**</span>





---

## Réflexion initiale technologique sur le sujet et configuration de l'environement de travail

### <span style="text-decoration:underline">Résumé du besoin et choix des technologies</span>

Le directeur José du zoo Arcadia à un besoin d’une application web dont les couleurs et le thème font penser à de l’écologie et montrer que le zoo est entièrement indépendant au niveau des énergies et il faut que lorsqu’un utilisateur consulte l’application, il ressente les valeurs de l’écologie. Les visiteurs pourront visualiser les animaux, leur état et visualiser les services ainsi que les horaires du zoo.

Le client à besoin de sécuriser l'accès aux modifications des données et le directeur veut attribuer 3 rôles: Lui, l'administrateur, et un deuxième rôle pour les employés ainsi qu'un troisème role pour le vétérinaire.

Le directeur José souhaite par ailleurs mettre en évidences tout les animaux du zoo qui seront réparti par habitat (savane, jungle, marais).

Plusieurs choix s'offrent à moi quand aux technologies à employer pour le site. Premièrement le design du site, du HTML 5 pour la stucture ainsi que du CSS 3 et du Javascript pour la stylisation et deuxièment du PHP pour intégrer les données directement sur le site et une base de données MySQL avec phpMyAdmin.

Pour le language utilisé pour le Backend, le PHP est un language que j'ai appris durant les cours sur STUDI, language très utilisé de nos jours, et des serveurs pouvant être simples à configurer. Les données seront confiées à MySQL pour répondre au besoin de l'examen. De ce choix, je choisirais le PHP ainsi que MySQL.

Pour la partie Frontend, le HTML 5 sera présent pour la structure du site c'est un language très simple à mettre en place, pour le style le CSS 3 fera place et en dernier du JavaScript pour des fonctionnalités supplémentaires.

Voici donc tous mes choix pour les languages à employées.

### <span style="text-decoration:underline">Configuration de l'environement de travail</span>

Travaillant sur un système d'exploitation de type `Windows`, les informations ci-dessous y seront bien évidement destinées.

Les commandes seront de type `Linux` mais elle pouront être exécuter sous un système `Linux` dans `Windows` qui se nommera `Unbuntu`.

- **Serveur:**
    + Apache
    + PHP 8.2.12
    + phpMyAdmin 5.2.1 / PDO
      


- **Backend (API)**
    + PHP 8.2.12
    + phpMyAdmin 5.2.1 / PDO
      
      

- **Frontend**
    + HTML 5
    + CSS 3
    + Javascript
      
      

---

## Utilisation

### <span style="text-decoration:underline">Installer l'application en local</span>

- **Installation de Unbutu sur Windows**

  Ubuntu est une distribution Linux, ou plutôt un système d'exploitation basé sur le noyau Linux. C'est un logiciel open-source et gratuit que des millions d'utilisateurs peuvent utiliser, distribuer et modifier le code qui compose ce système d'exploitation.

  Pour installer Unbutu rien de plus simple. Nous allons procéder à l'installation et activer le sous-système Linux et installer Ubuntu dans Windows.
  
- **Étape 1: Activer le sous-système Linux**

  - **1-**
    Commencez à taper «Activer et désactiver les fonctionnalités Windows» dans le champ de recherche du menu Démarrer, puis sélectionnez le panneau de commande lorsqu'il apparaît.

  - **2-**
    Faites défiler jusqu'à Sous-système Windows pour Linux, cochez la case, puis cliquez sur le OK.

  - **3-**
    Attendez que vos modifications soient appliquées, puis cliquez sur le bouton Redémarrez maintenant pour redémarrer votre ordinateur.

- **Étape 2: Installer et mettre à jour Ubuntu**

  - **1-**
    Nous allons maintenant installer une distribution Linux. Aller à Bouton Démarrer> Microsoft Store.

  - **2-**
    Pour voir les distributions Linux disponibles, saisissez «Linux» dans le champ de recherche, puis cliquez sur Exécutez Linux sur Windows.

  - **3-**
    Cliquez sur la distribution Linux que vous souhaitez installer. Dans ce guide, nous allons choisir Ubuntu et cliquez sur Obtenez.

  - **4-**
    Windows téléchargera et installera Ubuntu. Quand c'est fini, cliquez sur le Lancement.

  - **5-**
    Une fenêtre de terminal apparaîtra. Attendez qu'Ubuntu termine l'installation, puis créez un nouveau nom d'utilisateur et mot de passe Linux lorsque vous y êtes invité. Vous êtes maintenant à votre nouvelle ligne de commande Linux!
    
- **Étape 3: Installer et mettre à jour Ubuntu**
  
  - **1-**
    Le moment est venu de vous assurer que votre logiciel installé est à jour. Dans Ubuntu, vous pouvez utiliser le ```$ apt update``` dans la commande pour mettre à jour automatiquement tous les packages.

## Diagramme des Cas d'utilisations

<br />

![Modélisation des données](cas_d_utilisations.png)

<br /><br />


## Modélisation des données

Comme indiqué dans l'énoncé de l'examen, aucune des fonctionnalités demandées par Mr Parrot, mais surtout la manière de s'en servir de requiert de liens particuliers entre les différentes données.

C'est pourquoi, aucune liaison / relation ne sera représentée sur la modélisation des données.

![Modélisation des données](models.png)

<br />


## Diagramme de Merise

<br />

![Méthode de Merise](merise.png)

<br /><br />


## Diagrammes de séquence

### <span style="text-decoration:underline">Connexion d'un utilisateur</span>

<br />

![Diagramme de séquence: Connexion d'un visiteur](seq_login.png)

<br />

### <span style="text-decoration:underline">Modification d'un employé</span>

<br />

![Diagramme de séquence: Modification d'un visiteur](seq_update_user_data.png)

<br />

### <span style="text-decoration:underline">Découverte de la liste des véhicules d’occasion</span>

<br />

![Diagramme de séquence: Découverte de la liste des véhicules d’occasion](seq_offers_list.png)

<br />


### <span style="text-decoration:underline">Filtrer la liste des véhicules selon ses critères</span>

<br />

![Diagramme de séquence: Filtrer la liste des véhicules selon ses critères](seq_offers_filters.png)

<br />


### <span style="text-decoration:underline">Remplir le formulaire pour en savoir plus à propos d’une voiture en particulier</span>

<br />

![Diagramme de séquence: Remplir le formulaire pour en savoir plus à propos d’une voiture en particulier](seq_offer_contact.png)

<br />




---
<span style="color:red">**FICHIER charte_graphique.pdf**</span>


## Charte graphique

### <span style="text-decoration:underline">Polices d'écritures</span>

<span style="color:red">**nom, url et licence**</span>


### <span style="text-decoration:underline">Palettes de couleur</span>

<span style="color:red">**planche de palettes de couleur**</span>


### <span style="text-decoration:underline">Logo</span>

<span style="color:red">**logo du garage**</span>



## Maquettes pour le site web

### <span style="text-decoration:underline">Wireframe version Mobile</span>

<span style="color:red">**wireframe mobile**</span>


### <span style="text-decoration:underline">Wireframe version Web</span>

<span style="color:red">**wireframe web**</span>
