# navime API для мобильного приложения
## 1 Введение
NaVime API - серверное приложение, представляющее из себя json-api для последующей разработки мобильного приложение NaVime Mobile App для платформ iOS и Android. Приложение предназначено для огранизации и поиска вечеринок в непосредственной близости от пользователя мобильного приложения - социальной сети с возможностью обмена сообщениями и публикацией историй.
## 2 Требования пользователя
### 2.1 Программные интерфейсы
Проект должен соотвествовать спецификации JSON-API
### 2.2 Характеристика пользователей
Целевая аудитория конечного продукта - люди, желающие весело провести время и обрести новые знакомства.

Минимальные необходимые навыки - умение пользоваться смартфоном, ориентироваться по приложению.
## 3 Системные требования
Для функционирования данного приложения(API) необходим сервер с предустановленными PHP, MySQL
### 3.1 Функциональные требования
* Регистрация нового пользователя
* Авторизация пользователя
* Обновление информации о пользователе
* Просмотр информации о пользователе
* Создание предложений о проведении вечеринки
* Просмотр предложений о предстоящих вечеринках в радиусе 20км от геопозиции пользователя
* Обмен личными сообщениями и контактными данными между организатором и желающим посетителем
* Публикация историй о прошедших мероприятиях
* Просмотр историй
### 3.2 Нефункциональные требования
#### 3.2.1 Атрибуты качества
1.	Хранение пароля не в явном виде. Отсутствие уязвимостей конечного продукта.
2.  Время обработки любого запроса не более 1 секунды.
3.  Отсутствие программных ошибок.
#### 3.2.2 Внешние интерфейсы
1.  JSON-API интерфейс для работы с приложением.
2.  Полное соответствие спецификациям JSON-API.
## 4 Аналоги
1.  BuduTam