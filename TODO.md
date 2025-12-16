* `resources/views/events/index.blade.php`
* `resources/views/events/create.blade.php`
* `resources/views/events/edit.blade.php`
* `resources/views/events/show.blade.php`
=======
## 6. Criar Views de Evento ✅
* `resources/views/events/index.blade.php`
* `resources/views/events/create.blade.php`
* `resources/views/events/edit.blade.php`
* `resources/views/events/show.blade.php`
    * `resources/views/sobre-nos.blade.php`
    * `resources/views/jornada.blade.php`
    * `resources/views/eventos.blade.php`
    * `resources/views/contato.blade.php`
    * `resources/views/depoimentos.blade.php`

## 3. Atualizar routes/web.php ✅
* Adicionar rotas para cada seção

## 4. Criar model e migration para Evento ✅
* `php artisan make:model Event -m`
* Definir o Model `Event` (Evento) com os campos: `title` (título), `description` (descrição), `date` (data), etc.

## 5. Configurar Controller CRUD de Evento ✅
* `php artisan make:controller EventController --resource`
* Implementar métodos CRUD (Criar, Ler, Atualizar, Excluir)
* Proteger as rotas de criação/edição com *middleware* de autenticação (`auth`)

## 6. Criar Views de Evento
* `resources/views/events/index.blade.php`
* `resources/views/events/create.blade.php`
* `resources/views/events/edit.blade.php`
* `resources/views/events/show.blade.php`

## 7. Atualizar links de navegação
* Vincular a navegação às rotas corretas

## 8. Executar migrations
* `php artisan migrate`

## 9. Testar funcionalidade ✅
* Verificar a navegação
* Testar o CRUD para eventos (autenticação necessária)

---

