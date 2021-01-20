<?php

return [
    'key' => [
        'warning' => 'Il semble que vous avez déjà configuré une clé de cryptage d’application. Poursuivre ce processus avec l’overwrite que la clé et causer la corruption des données pour toutes les données chiffrées existantes. NE CONTINUEZ PAS À MOINS DE SAVOIR CE QUE VOUS FAITES.',
        'confirmer' => 'Je comprends les conséquences de l’exécution de cette commande et d’accepter toute responsabilité pour la perte de données chiffrées.',
        'final_confirm' => 'Etes-vous sûr que vous souhaitez continuer? La modification de la clé de cryptage de l’application CAUSERA UNE PERTE DE DONNÉES.',
    ],
    'location' => [
        'no_location_found' => 'Ne pouvait pas localiser un enregistrement correspondant au code court fourni.',
        'ask_short' => 'Location Short Code',
        'ask_long' => 'Description de localisation',
        'créé' => 'Avec succès créé un nouvel emplacement (:name) avec un ID de :id.',
        'deleted' => 'Avec succès supprimé l’emplacement demandé.',
    ],
    'user' => [
        'search_users' => 'Entrez un nom d’utilisateur, un identifiant d’utilisateur ou une adresse e-mail',
        'select_search_user' => 'ID de l’utilisateur à supprimer (Entrez \'0\' pour re-rechercher)',
        'supprimé' => 'Utilisateur avec succès supprimé du Panneau',
        'deleted' => 'Etes-vous sûr que vous voulez supprimer cet utilisateur du Panel?',
        'no_users_found' => 'Aucun utilisateurs n’a été trouvé pour le terme de recherche fourni.',
        'multiple_found' => 'Plusieurs comptes ont été trouvés pour l’utilisateur fourni, incapable de supprimer un utilisateur en raison du drapeau --no-interaction.',
        'ask_admin' => 'Cet utilisateur est-il un administrateur?',
        'ask_email' => 'Adresse e-mail',
        'ask_username' => 'Nom d’utilisateur',
        'ask_name_first' => 'Prénom',
        'ask_name_last' => 'Nom de famille',
        'ask_password' => 'Mot de Passe',
        'ask_password_tip' => 'Si vous souhaitez créer un compte avec un mot de passe aléatoire envoyé par courriel à l’utilisateur, réexédez cette commande (CTRL+C) et passez le drapeau --no-interaction',
        'ask_password_help' => 'Les mots de passe doivent être d’au moins 8 caractères de longueur et contenir au moins une majuscule et un numéro.',
        '2fa_help_text' => [
            'Cette commande désactivera l’authentification à 2 facteurs pour le compte d’un utilisateur\'s si elle est activée. Cela ne doit être utilisé comme commande de récupération de compte que si l’utilisateur est verrouillé hors de son compte.',
            'Si ce n’est pas ce que vous vouliez faire, appuyez sur CTRL+C pour sortir de ce processus.'
        ],
        '2fa_disabled' => '2-Factor authentification a été désactivée pour :email.',
    ],
    'schedule' => [
        'output_line' => 'Envoie du travail pour la première tâche dans `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Suppression du fichier de sauvegarde de service :file',
    ],
    'server' => [
        'rebuild_failed' => 'Reconstruire la demande de ":name" (#:id) sur le node ":node" a échouer avec l\'erreur: :message',
        'reinstall' => [
            'failed' => 'Demande de reinstallation de ":name" (#:id) sur le node ":node" a échouer avec l\'erreur: :message',
            'confirm' => 'Vous êtes sur le point de réinstaller contre un groupe de serveurs. Souhaitez-vous continuer?',
        ],
        'power' => [
            'confirm' => 'Vous êtes sur le point d’effectuer une :action contre :count servers. Souhaitez-vous continuer?',
            'action_failed' => 'Demande d’action de puissance pour ":name" (#:id) sur le node ":node" a échouer avec l\'erreur: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Host (p. ex. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Port',
            'ask_smtp_username' => 'SMTP Username',
            'ask_smtp_password' => 'MOT de passe SMTP',
            'ask_mailgun_domain' => 'Mailgun Domain',
            'ask_mailgun_secret' => 'Mailgun Secret',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => 'Quel pilote doit être utilisé pour envoyer des e-mails?',
            'ask_mail_from' => 'E-mails d’adresse e-mail devraient provenir',
            'ask_mail_name' => 'Nom d’où les e-mails devraient apparaître',
            'ask_encryption' => 'Méthode de cryptage à utiliser',
        ],
        'database' => [
            'host_warning' => 'Il est fortement recommandé de ne pas utiliser "localhost" comme hôte de base de données car nous avons vu des problèmes fréquents de connexion socket. Si vous souhaitez utiliser une connexion locale, vous devez utiliser "127.0.0.1".',
            'host' => 'Database Host',
            'port' => 'Database Port',
            'database' => 'Nom de base de données',
            'username_warning' => 'L’utilisation du compte "root" pour les connexions MySQL n’est pas seulement très mal vu, il n’est pas non plus autorisé par cette application. Vous aurez besoin d’avoir créé un utilisateur MySQL pour ce logiciel.',
            'nom d’utilisateur' => 'Nom d’utilisateur de base de données',
            'password_defined' => 'Il semble que vous avez déjà défini un mot de passe de connexion MySQL, souhaitez-vous le changer?',
            'mot de passe' => 'Mot de Passe de base de données',
            'connection_error' => 'Impossible de se connecter au serveur MySQL en utilisant les informations d’identification fournies. L’erreur retournée était « :erreur ».',
            'creds_not_saved' => 'Vos informations d’identification de connexion n’ont pas été enregistrées. Vous devrez fournir des informations de connexion valides avant de procéder.',
            'try_again' => 'Revenir en arrière et réessayer?',
        ],
        'app' => [
            'settings' => 'Activer l’éditeur de paramètres basés sur l’interface utilisateur?',
            'author' => 'Egg Author Email',
            'author_help' => 'Fournir l’adresse e-mail dont les œufs exportés par ce Groupe spécial devraient être. Il devrait s’agir d’une adresse e-mail valide.',
            'app_url_help' => 'L’URL de l’application doit commencer par https:// ou http:// selon que vous utilisez SSL ou non. Si vous n’incluez pas le schéma, vos e-mails et autres contenus seront lier au mauvais emplacement.',
            'app_url' => 'URL d’application',
            'timezone_help' => 'Le fuseau horaire doit correspondre à l’un des fuseaux horaires pris en charge par PHP.. Si vous n’êtes pas sûr, veuillez http://php.net/manual/en/timezones.php.',
            'timezone' => 'Application Timezone',
            'cache_driver' => 'Cache Driver',
            'session_driver' => 'Session Driver',
            'queue_driver' => 'Queue Driver',
            'using_redis' => 'Vous avez sélectionné le pilote Redis pour une ou plusieurs options, veuillez fournir des informations de connexion valides ci-dessous. Dans la plupart des cas, vous pouvez utiliser les valeurs par défaut fournies à moins d’avoir modifié votre configuration.',
            'redis_host' => 'Redis Host',
            'redis_password' => 'Redis Password',
            'redis_pass_help' => 'Par défaut, une instance serveur Redis n’a pas de mot de passe car elle est en cours d’exécution localement et inaccessible au monde extérieur. Si c’est le cas, il suffit de frapper entrer sans entrer une valeur.',
            'redis_port' => 'Redis Port',
            'redis_pass_defined' => 'Il semble qu’un mot de passe soit déjà défini pour Redis, voulez-vous le changer?',
        ],
    ],
];
