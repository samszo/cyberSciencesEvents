# cyberSciencesEvents

Piloter des événements scientifiques à l'ère des technologies intellectives

## Quarto Website

Ce projet utilise [Quarto](https://quarto.org/) pour générer un site web de documentation.

### Prérequis

- [Quarto](https://quarto.org/docs/get-started/) installé sur votre système

### Construction du site

Pour générer le site web :

```bash
quarto render
```

Le site sera généré dans le dossier `_site/`.

### Prévisualisation locale

Pour prévisualiser le site en local avec rechargement automatique :

```bash
quarto preview
```

Le site sera accessible à l'adresse `http://localhost:4200` (ou un autre port si celui-ci est occupé).

### Structure du projet

- `_quarto.yml` : Configuration du site Quarto
- `index.qmd` : Page d'accueil
- `about.qmd` : Page "À propos"
- `styles.css` : Styles CSS personnalisés
- `_site/` : Dossier de sortie (généré, non versionné)
