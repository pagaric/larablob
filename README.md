# Utilisation et stockage de blob en base de données avec Laravel

Pour faire fonctionner le projet

- Créer le fichier `.env` en utilisant le fichier `.env.example`
- Ajouter les identifiants de votre BDD
- Lancer un commande `composer install`
- Lancer une commande `php artisan key:generate`

## Utilisation de la méthode `addslashes`

Dans le controller: `addslashes(file_get_contents($_FILES['fic']['tmp_name']))`

Dans la vue: `<img src="data:image/jpeg;base64,{{base64_encode( stripslashes($img->img_blob ))}}" alt="image"/>`

## Sans utilisation de la méthode `addslashes`

Dans le controller: `file_get_contents($_FILES['fic']['tmp_name'])`

Dans la vue: `<img src="data:image/jpeg;base64,{{base64_encode( $img->img_blob )}}" alt="image"/>`

