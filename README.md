# Backend Проекта

## Описание проекта

Backend часть проекта разработана с использованием фреймворка **Laravel 11**. Проект предоставляет RESTful API для регистрации, аутентификации пользователей и получения информации о текущем пользователе.

## Технологии

- **PHP 8.0+**
- **Laravel 11**
- **PostgreSQL** или другая СУБД
- **JWT-аутентификация** с использованием пакета `tymon/jwt-auth`
- **Swagger/OpenAPI** для генерации документации API с использованием пакета `darkaonline/l5-swagger`

## Требования

- PHP 8.0 или выше
- Composer
- СУБД (рекомендуется PostgreSQL)
- Расширения PHP: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, BCMath

## Пример запроса к API на регистрацию

```json
{
  "name": "Александр Ширяев",
  "email": "sashaintim@don.ru",
  "password": "password123",
  "password_confirmation": "password123"
}
```

## Пример ответа

```json
{
  "message": "Пользователь успешно зарегистрирован",
  "user": {
    "id": 1,
    "name": "Александр Ширяев",
    "email": "sashaintim@don.ru",
    "created_at": "2024-10-18T04:34:56Z",
    "updated_at": "2024-10-18T04:34:56Z"
  },
  "token": "Cvj3nJcQe7djyjY818woxct9yTIF4zqQCaKfR03ng9fX1DMiSVjIwxi7qhruGO6M"
}
```

## Авторизация и аутентификация

Для аутентификации используется JWT-токен. После успешной регистрации или входа пользователь получает токен, который должен передаваться в заголовке Authorization для доступа к защищенным ресурсам.

## В проекте используется пакет darkaonline/l5-swagger для генерации документации API.

Генерация документации: php artisan l5-swagger:generate
Просмотр документации на локальном сервере: http://localhost:8000/api/documentation


## кто дочитал тот гей

