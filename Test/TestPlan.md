# План тестирования
---


# Cодержание
1 [Введение](#introduction)  
2 [Объект тестирования](#items)  
3 [Риски](#risk)  
4 [Аспекты тестирования](#features)  
5 [Подходы к тестированию](#approach)  
6 [Представление результатов](#pass)  
7 [Выводы](#conclusion)  

<a name="introduction"/>

# 1 Введение

Данный документ описывает план тестирования системы. Он предназначен для тестировщиков. Цель тестирования: проверить соответствие приложения [требованиям](../documents/SRS.md)

<a name="items"/>

# 2 Объект тестирования

В процессе тестирования предполагается проверить работоспособность приложения.  
В качестве объектов тестирования можно выделить основные функциональные требования, а также требования удобству использования.  
Атрибуты качества:  
1. Функциональная пригодность:  
* функциональная полнота;  
* функциональная корректность;  
* функциональная целесообразность;  
2. Удобство использования:  
* определимость пригодности;  
* изучаемость;  
* управляемость;  
* защищённость от ошибки пользователя;  

<a name="risk"/>

# 3 Риски

К рискам можно отнести:  
* неправильное формирования запроса к методу;
* не обновление Bearer токена пользователем своевременно

<a name="features"/>

# 4 Аспекты тестирования

В ходе тестирования планируется проверить реализацию основных функций приложения, а также удобство использования.  
К основным функциям можно отнести следующие пункты:  
* регистрация нового пользователя;  
* аутентификация и авторизация пользователей;  
* просмотр доступных событий;
* создание нового события.

<a name="approach"/>

# 5 Подходы к тестированию

Предполагается использовать ручное тестирование api методов при помощи Postman.

<a name="pass"/>

# 6 Представление результатов

Результаты тестирования представлены в документе [соответствующем документе](./Test/TestResult.md).

<a name="conclusion"/>

# 7 Выводы