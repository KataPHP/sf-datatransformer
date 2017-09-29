Kata SF DataTransformer
===============

## Instruction

1) Créer un **ArticleFormType**
   remarque spéficique sur les champs suivants :
   - champ tags (string)
   - champ published_at (string DD-MM-YYYY))

2) Ajouter un DataTransformer sur le champ **published_at** en utilisant **CallbackTransformer**
 qui transforme un **string** en **Datetime**

3) Créer une classe **TagDataTransformer** (string to array)
   - Ajouter ce datatransformer au formulaire article sur le champ tags

## Links

- https://symfony.com/doc/current/doctrine.html#add-mapping-information
- https://symfony.com/doc/current/components/form.html
- http://php.net/manual/fr/datetime.format.php
- http://symfony.com/doc/current/form/data_transformers.html

## RUN

```bash
$ docker-compose up -d
$ php bin/console doctrine:schema:create
$ php bin/console server:run 
```