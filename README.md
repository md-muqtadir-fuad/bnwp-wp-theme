# BNWP WordPress Theme

A custom WordPress theme for the Bangla WikiConnect website.

## Project Status

This theme is currently under testing and active development. The stable branch is `master`, and experimental changes should be done in the `test` branch.

## Local Development

This theme is developed and tested locally using XAMPP.

Theme folder location:

```text
C:\xampp\htdocs\bnwp\wp-content\themes\bnwp-wikiconnect
```

Local site URL:

```text
http://localhost/bnwp
```

## Theme Structure

```text
bnwp-wikiconnect/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── front-page.php
├── page.php
├── single.php
├── archive-project.php
├── archive-persona.php
├── single-project.php
├── single-persona.php
├── taxonomy-team.php
├── search.php
├── 404.php
└── assets/
    ├── css/
    ├── js/
    └── uploads/
```

## Development Workflow

Work on the test branch:

```bash
git checkout test
```

Commit changes:

```bash
git add .
git commit -m "Update theme"
git push
```

When changes are tested and stable, merge into master:

```bash
git checkout master
git merge test
git push
```

## Notes

Do not upload the full WordPress installation to this repository. This repository should contain only the custom theme files.

Do not edit WordPress core files inside `wp-admin` or `wp-includes`.
