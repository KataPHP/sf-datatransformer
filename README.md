Kata SF DataTransformer
===============

## Instruction

### Entity

1) Créer une entité **article**
    - id (@id autogenerate)
    - title (string 150)
    - body (text)
    - author (string 50)
    - created_at (datetime hydrate par le constructor)
    - published_at (date)
    - tags (ArrayCollection) 
2) Créer une entité **tag**
   - id (@id autogenerate)
   - name (unique string 50)

### Form

3) Créer un **ArticleFormType**
   remarque spéficique sur les champs suivants :
   - champ tags (string)
   - champ published_at (string DD-MM-YYYY))

4) Ajouter un DataTransformer sur le champ **published_at** en utilisant **CallbackTransformer**
 qui transforme un **string** en **Datetime**

5) Créer une classe **TagDataTransformer** (string to array)
   - Ajouter ce datatransformer au formulaire article sur le champ tags


### Twig + Controller

remarque : faire une gestion simple des formulaires dans le controller

6) Créer un controller **ArticleController**

7) Créer une page article list (twig + controller)

8) Créer une page de creation d'article (twig + controller)

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