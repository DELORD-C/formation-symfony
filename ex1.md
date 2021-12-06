# Exercice 1

1. Créer un controller : DefaultController

2. Créer les routes suivantes :
- /happy/`{nom}`
    - Si le paramètre est vide : afficher "Aucun anniversaire"
    - Sinon : afficher "Happy Birthday `{nom}`"

- /count/`{number}`
    - Si le paramètre est vide ou n'est pas un INT, afficher une erreur personnalisée (ex : Aucun / Mauvais paramètre)
    - Sinon, afficher tous les nombres de 0 jusqu'au nombre passé en paramètre.