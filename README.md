# IValanter *(server API)*
*Цель: создать платформу для коммуникации инженерных волонтеров и организаций-социальных заказчиков.*

#### Развертывние проекта

###### __Обновить composer__
```bash
composer self-update
```

###### __Установить зависимости composer__
```bash
composer install
```

###### __Создать базу__
```bash
php bin/console doctrine:database:create
```

###### __Выполнить миграции__
```bash
php bin/console doctrine:migrations:migrate
```
###### __Загрузить фикстуры__
```bash
php bin/console doctrine:fixtures:load --append
```
