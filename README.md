# LES SEPT RÉPERTOIRES
======================

Ce document explique à quoi servent les "seven directories" (ce sont les noms de base, ils changeront selon la personne/société).

### base/
Ce dossier contient les fichiers qui définissent les fondations du site (ex : font, normes comme box-sizing, color, form, ...).

### utils/
Dans ce dossier, les variables, les fonctions, les mixins et les %placeholder (@exten) sont rangés.

### layout/
Ce dossier contient les blocks BEM qui contiennent ce qui est réutilisable, par exemple un header que l'on insère un header pour les mises en page de grande taille (section très longue), ou un footer.
EX : Un formulaire sera considéré comme un layout, c'est un block que l'on met en page.
Il peut aussi contenir toutes les sections séparées du site (_header.scss / _main.scss / _nav.scss).

### components/
Ce dossier est utilisé pour ranger les blocks BEM qui sont indépendants comme les boutons (atomes). Ils n'ont aucun autre composents pour remplir leur fonction.

### pages/
Ce dossier contient des blocks qui ne s'appliquent qu'à une seule page. Par exemple, la page d'accueil comporte une section citation et une grille projet qui ne sont utilisés nulle part ailleurs. En d'autre termes, pages/ contient des règles spécifiques à une seule page qui ne seront pas réutilisées ailleurs.

### themes/
C’est ici que nous stockerons le code thématique, par exemple un style customisé pour Noël ou pour l’été. On ne l’utilisera pas dans notre site.

### vendors/
Ce dossier contient des feuilles de style (prédéfinies) externes comme Bootstrap ou JQueryUI (ou autre framework).



# WEBDESIGN : REGLE DE 8 PX
===========================

Cette règle est appliqué sur l'ensemble des blocs des pages (div, img, section, etc...) à l'exception des fonts. La taille des textes doit être définie en pixel.
En dessous de 0.5rem, la valeur est convertie en px (on écrit 2px au lieu de 0.12rem).

### Règle de 8

REM = PX

0.5 = 8
1   = 16
1.5 = 24
2   = 32
2.5 = 40
3   = 48
3.5 = 56
4   = 64
4.5 = 72
5   = 80
5.5 = 88
6   = 96
6.5 = 104
7   = 112
7.5 = 120
8   = 128
8.5 = 136
9   = 144
9.5 = 152
10  = 160

ETC...

Calcul (1 rem = 16px) :
1.5rem x 16 = 24px
144px / 16 = 9rem
