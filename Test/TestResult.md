<table>
    <thead>
        <tr>
            <th>
            ID
            </th>
            <th>
                Назначение/название
            </th>
            <th>
                Сценарий
            </th>
            <th>
                Ожидаемый результат
            </th>
            <th>
                Фактический результат
            </th>
            <th>
                Оценка
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                1
            </td>
            <td>
                 Метод регистрации с непраильным вводом пароля для подтверждения       
            </td>
            <td>
                 Отправка поля password_confirmation не совпадающего с полем password
            </td>
            <td>
                  Вывод характерного сообщения об ошибке
            </td>
            <td>
                  {
                      "message": "not valid data",
                      "errors": {
                          "password": [
                              "Подтверждение поля пароль не совпадает"
                          ]
                      },
                      "status_code": 422
                  }
            </td>
            <td>
                v
            </td>
        </tr>
        <tr>
            <td>
                2
            </td>
            <td>
                 Метод регистрации с правильным вводом всех данных       
            </td>
            <td>
                 Прохождение регистрации пользователя
            </td>
            <td>
                  Вывод id только что зарегистрированного пользователя
            </td>
            <td>
                  {
                      "data": {
                          "id": 4,
                          "email": "example@gmail.com",
                          "name": "Example Example"
                      }
                  }
            </td>
            <td>
                v
            </td>
        </tr>
        <tr>
            <td>
                3
            </td>
            <td>
                 Метод аутентификации     
            </td>
            <td>
                 Аутентификация только что зарегистрированного пользователя с правильным водом всех данных
            </td>
            <td>
                 Вывод bearer токена пользователя для выполнения действий требующих авторизацию
            </td>
            <td>
                  {
                      "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbmV3ZHMubG9jL2FwaS91c2VyL2xvZ2luIiwiaWF0IjoxNTE1NjAxODg0LCJleHAiOjE1MTU2MDU0ODQsIm5iZiI6MTUxNTYwMTg4NCwianRpIjoiUE1MeFJWVW5RRExkNjE3SyIsInN1YiI6NCwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.OIrLMCOfa1O5uAdFyokwPBTVXQgl1rcyc2s_bO4BDDk",
                      "token_type": "bearer",
                      "expires_in": 3600
                  }
            </td>
            <td>
                v
            </td>
        </tr>
        <tr>
            <td>
                4
            </td>
            <td>
                 Метод обновления информации о пользователе    
            </td>
            <td>
                 Обновление информации о пользователе
            </td>
            <td>
                 Вывод обновленных данных в случае успеха
            </td>
            <td>
                {
                    "data": {
                        "id": 4,
                        "email": "example@gmail.com",
                        "name": "New Name",
                        "avatar": "R0lGODlhAQABAIAAAAUEBAAAACwAAAAAAQABAAACAkQBADs"
                    }
                }
            </td>
            <td>
                v
            </td>
        </tr>
        <tr>
            <td>
                5
            </td>
            <td>
                 Метод обновления информации о пользователе    
            </td>
            <td>
                 Обновление информации о пользователе с отправкой просроченного bearer токена
            </td>
            <td>
                 Вывод сообщения о соответствующей ошибке
            </td>
            <td>
                {
                    "message": "Token has expired",
                    "status_code": 401
                }
                На [рисунке 1](#1) можно увидеть скриншот из Postman с формированием данного запроса и получением ответа
            </td>
            <td>
                v
            </td>
        </tr>
        <tr>
            <td>
                6
            </td>
            <td>
                 Метод создания нового события    
            </td>
            <td>
                 Создание нового события пользователем
            </td>
            <td>
                 Вывод информации о только что созданном событии
            </td>
            <td>
                {
                    "data": {
                        "id": 2,
                        "longitude": 53.911598,
                        "latitude": 27.595895,
                        "description": {
                                         "text": "BSUIR exam at 11.01.2018",
                                         expire_in: 1515664805
                        },
                        "created_at": {
                                         "date": "2018-01-10 16:51:09.000000",
                                         "timezone_type": 3,
                                         "timezone": "UTC"
                                     },
                        "updated_at": {
                                      "date": "2018-01-10 16:51:09.000000",
                                      "timezone_type": 3,
                                      "timezone": "UTC"
                                  },
                        "user_id": 2
                    }
                }
            </td>
            <td>
                v
            </td>
        </tr>
        <tr>
            <td>
                7
            </td>
            <td>
                 Метод просмотра событий    
            </td>
            <td>
                 Просмотр событий в географической близости от пользователя (пользователь сам отправляет свои координаты)
            </td>
            <td>
                 Вывод информации о близлежущих событиях, созданными всеми пользователями пользователями
            </td>
            <td>
                {
                    "data": {
                        "events": [
                            {
                                "id": 1,
                                "longitude": 53.911598,
                                "latitude": 27.595895,
                                "description": {
                                                 "text": "BSUIR exam at 11.01.2018",
                                                 expire_in: 1515664805
                                },
                                "created_at": {
                                                 "date": "207-12-22 12:11:02.000000",
                                                 "timezone_type": 3,
                                                 "timezone": "UTC"
                                             },
                                "updated_at": {
                                                 "date": "207-12-22 12:11:02.000000",
                                                 "timezone_type": 3,
                                                 "timezone": "UTC"
                                          },
                                "user_id": 1
                            },
                            {
                                "id": 2,
                                "longitude": 53.911598,
                                "latitude": 27.595895,
                                "description": {
                                                 "text": "BSUIR exam at 11.01.2018",
                                                 expire_in: 1515664805
                                },
                                "created_at": {
                                                 "date": "2018-01-10 16:51:09.000000",
                                                 "timezone_type": 3,
                                                 "timezone": "UTC"
                                             },
                                "updated_at": {
                                              "date": "2018-01-10 16:51:09.000000",
                                              "timezone_type": 3,
                                              "timezone": "UTC"
                                          },
                                "user_id": 2
                            }
                        ]
                    }
                }
            </td>
            <td>
                v
            </td>
        </tr>
    </tbody>
</table>
# Иллюстрации

<a name="1"/>

Рисунок 1.
![Рисунок 1](./images/1.png)