Для развёртывания проекта в папке с проектом вызвать "docker-composer up".
Адрес для доступа localhost:8080.


Код расчёта стоимсти доставки расположен в Delivery. Определён только один роут /api/calculate-delivery-info.
Пример валидного запроса:

````json
{
    "sender_address": "sender_address",
    "recipient_address": "recipient_address",
    "delivery": "all",
    "product_data": {
        "0": {
            "weight": "4",
            "depth": "100",
            "width": "100",
            "height": "100",
            "count": "5"
        },
        "2": {
            "weight": "2",
            "depth": "50",
            "width": "100",
            "height": "300",
            "count": "2"
        }
    }
}
````
Параметр "delivery" является опциональным. Если не указать имя сервиса доставки, то рассчёт будет вестись по всем имеющимся доставкам.

Пример ответа на запрос выше:
````json
{
    "deliveryA": {
        "price": 200,
        "days": 3.1
    },
    "deliveryB": {
        "coefficient": 10,
        "date": "29-01-2021"
    }
}
````

Тело реквеста сериализуетсяа в DTO. Логика сериализации в src/Delivery/Dto. Логика выбора подходящего Dto описана в src/Delivery/Services/DeliveryRequestSerializerService.php.

Логика рассчёта информации для доставки рассполагается в src/Delivery/Services/DeliveryService.php на основе массива с Dto данными.
Выбор необходимой стратегии для рассчёта осуществляется через src/Delivery/Enums/DeliveriesEnum.php и создаётся через фабрику src/Delivery/Factories/DeliveryFactory.php. 

Что не сделано:
1) Сериалайз ответов.
2) Валидация.   
3) Тесты.

