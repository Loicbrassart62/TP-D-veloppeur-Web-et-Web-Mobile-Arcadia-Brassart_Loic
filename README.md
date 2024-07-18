# TP – Développeur Web et Web Mobile
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

**Démonstration** : <span style="color:red">Url du site</span>

    Adresse email démo      : 
    Mot de passe démo       : 

**Trello** : <span style="color:red">**[url du trello](https://trello.com/invite/b/662f3fc9a1272f660ed52479/ATTIa3128884f4bb6fc2ddfe9bdd7ed851cbF02B469D/arcadia-ecf-brassartloic)**</span>





---

## Partie 1 : Analyse des besoins 

### <span style="text-decoration:underline">Résumé du projet</span>

Arcadia est un zoo français, établi près de la forêt de Brocéliande en Bretagne depuis 1960. Abritant une diversité d’animaux répartis par habitat, comme la savane, la jungle et les marais, le zoo met un point d’honneur à assurer la santé et le bien-être de ses pensionnaires. Chaque jour, plusieurs vétérinaires effectuent des contrôles rigoureux avant l’ouverture pour garantir que les animaux sont en bonne santé. La nourriture des animaux est soigneusement dosée selon les recommandations vétérinaires.

Financièrement, Arcadia se porte bien et les animaux y sont heureux, ce qui fait la fierté de José, le directeur du zoo, qui nourrit de grandes ambitions pour l'avenir. Bien que José ne soit pas à l’aise avec l’informatique, il aspire à créer une application web pour permettre aux visiteurs de visualiser les animaux, connaître leur état de santé et consulter les services et horaires du zoo. Ne sachant pas comment réaliser ce projet, José a demandé à son assistante, Josette, de trouver une entreprise capable de développer cette application.

Josette a choisi DevSoft, où je suis embauché après l’obtention de mon diplôme. Ma mission est de créer cette application web, contribuant ainsi à améliorer la notoriété et l'image de marque du zoo Arcadia, tout en offrant une expérience enrichissante et interactive aux visiteurs.

### <span style="text-decoration:underline">Cahier des charges</span> 
<span style="text-decoration:underline">Cahier des charges</span> 


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
    Commencez à taper `Activer et désactiver les fonctionnalités Windows` dans le champ de recherche du menu Démarrer, puis sélectionnez le panneau de commande lorsqu'il apparaît.

  - **2-**
    Faites défiler jusqu'à Sous-système Windows pour Linux, cochez la case, puis cliquez sur le `OK`.

  - **3-**
    Attendez que vos modifications soient appliquées, puis cliquez sur le bouton `Redémarrez` maintenant pour redémarrer votre ordinateur.

- **Étape 2: Installer et mettre à jour Ubuntu**

  - **1-**
    Nous allons maintenant installer une distribution Linux. Aller à Bouton `Démarrer` vers le `Microsoft Store`.

  - **2-**
    Pour voir les distributions Linux disponibles, saisissez `Linux` dans le champ de recherche, puis cliquez sur Exécutez `Linux` sur `Windows`.

  - **3-**
    Cliquez sur la distribution Linux que vous souhaitez installer. Dans ce guide, nous allons choisir Ubuntu et cliquez sur `Obtenez`.

  - **4-**
    Windows téléchargera et installera Ubuntu. Quand c'est fini, cliquez sur le `Lancement`.

  - **5-**
    Une fenêtre de terminal apparaîtra. Attendez qu'Ubuntu termine l'installation, puis créez un nouveau nom d'utilisateur et mot de passe Linux lorsque vous y êtes invité. Vous êtes maintenant à votre nouvelle ligne de commande Linux!
    
- **Étape 3: Configurer Ubuntu**
  
  - **1-**
    Le moment est venu de vous assurer que votre logiciel installé est à jour. Dans Ubuntu, vous pouvez utiliser le ```apt get``` dans la commande pour mettre à jour automatiquement tous les packages.

  - **2-**
    Nous devrons mettrons à jour les listes de paquets. Entrez la commande ci-dessous (notez que vous devez utiliser sudo et entrez votre mot de passe pour exécuter la commande en tant qu'administrateur): ```sudo apt-get update [sudo] mot de passe pour admin par exemple```

  - **3-**
    Ubuntu se connectera à ses référentiels et téléchargera une série de listes de paquets. Quand c'est fini, utilisez ```apt-get``` à nouveau pour mettre à niveau tous les packages vers leurs dernières versions.

  - **4-**
    Une liste des packages à mettre à niveau s'affiche. Entrer ```Y``` à l'invite pour continuer l'installation. Ubuntu va maintenant télécharger et installer les packages. Ce processus prendra probablement au moins quelques minutes, selon la vitesse de votre 
    connexion et le nombre de packages à mettre à niveau. Vous pouvez également être invité à indiquer si vous souhaitez que les services soient automatiquement redémarrés lors de l'installation des packages (nous sélectionnons «Oui» ici pour plus de commodité, 
    mais ce n'est pas obligatoire).

  - **5-**
    Enfin, exécutez cette commande pour vérifier les dépendances et supprimer les packages obsolètes du système (en fonction de la durée de l'étape précédente, vous devrez peut-être saisir à nouveau notre mot de passe): ```sudo apt-get dist-upgrade``` et encore 
    une fois, entrez ```Y``` à l'invite pour installer les packages répertoriés.

    Vous avez fini d'installer et de mettre à jour Ubuntu Linux! Vous pouvez lancer un terminal Linux à tout moment en sélectionnant Ubuntu depuis le menu de démarrage.

    - **Installation de XAMPP sur Windows**

    XAMPP est un ensemble de logiciels permettant de mettre en place un serveur Web local, un serveur FTP et un serveur de messagerie électronique.

    - **Étape 1: Télécharger XAMPP sur Windows**
   
    - **1-**
     Lien pour télécharger XAMPP : <span style="color:red">[url de xampp](https://www.apachefriends.org/download.html)</span> et choisir la dernière version de XAMPP pour Windows.

    - **Étape 2: Sélectionner les bons composants dans l'installation de XAMPP**

    - **1-**
      Quand vous arriverez sur la page d'installation continuer jusqu'a la sélection des composants à installer et ensuite cocher les cases : `MySQL`, `Apache`, `PHP` et `phpMyAdmin` et continuez jusqu'a la fin de l'installation. Lorsque que vous arrivez à la fin de l'installation cocher la case pour ouvrir le Control Panel.

    - **Étape 3: Configurer le Control Panel de XAMPP**
      
    - **1-**
      Ouvrez le Control Panel de XAMPP, ensuite vous arriverez sur la page principal du Control Panel.

    - **2-**
      Dans la colonne Action cliquer sur `Start` pour le module `Apache` ainsi que `MySQL`, les modules vont s'éxecuter pour le bon fonctionnement du serveur.

    - **3-**
      Ensuite cliquer sur `Admin` pour le module MySQL et vous arriverez sur la page phpMyAdmin ou en tapant directement dans votre barre de recherche localhost.

      Vous avez fini d'installer XAMPP! Vous pouvez lancer un phpMyAdmin à tout moment en démarrant dans le Control Panel de XAMPP.

    - **Mettre le site en local avec XAMPP**
   
    - **Étape 1: Mettre le site en local avec XAMPP**
      
    - **1-**
      Mettre le fichier du site web `Arcadia` dans XAMPP vers le chemin : `C:\xampp\htdocs`, le fichier htdocs contiendra toujours le site web.

    - **Étape 2: Configurer phpMyAdmin**

    - **1-**
      Aller dans le Control Panel de XAMPP, ensuite aller dans `Config` dans le module `Apache` et choisir `phpMyAdmin (config.inc.php)`.

    - **2-**
      Dans le fichier `config.inc.php` mettre les paramètres suivants :
       
      - $cfg['Servers'][$i]['auth_type'] = 'config';
      - $cfg['Servers'][$i]['user'] = 'root';
      - $cfg['Servers'][$i]['password'] = '';
      - $cfg['Servers'][$i]['extension'] = 'mysqli';
      - $cfg['Servers'][$i]['AllowNoPassword'] = true;
      - $cfg['Lang'] = '';
      - $cfg['Servers'][$i]['host'] = 'localhost';
      - $cfg['Servers'][$i]['connect_type'] = 'tcp';
     
      - **3-**
        Il faut changer de port pour le serveur qui se trouve en haut à droite du Control Panel dans `Config`, ensuite aller dans `Service and Port Settings` et `MySQL` pour remplacer le `Main Port` par `3306`.

        Vous avez fini de configurer phpMyAdmin! Maintenant nous allons voir comment intégrer les bases de données SQL qui seront fournis.

      - **Intégrer les bases de données SQL**

      - **1-**
 

  
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
