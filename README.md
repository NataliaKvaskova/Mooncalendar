<h2>Итоговая работа по курсу Fullstack разработчик.</h2>

# Mooncalendar
Идея сервиса возникла еще до начала обучения и легла в основу итогового проекта по курсу Fullstack разработчик. И поэтому есть ряд особенностей в реализации идеи:
1. Основная задача дизайн-макета сайта: максимально полно показать выполненные задачи.
2. Функционал сайта реализован частично, но в полном соответствии с требованиями к итоговой работе.
3. "Кривая" логика и названия классов, переменных связаны с тем, что работа велась постепенно в процессе изучения материала (от простого к сложному).
4. Вместо контента сайта использовались заглушки.
# Реализовано:
<h3>Backend:</h3>
1. Регистрация пользователей с учетом проверки вводимых данных.
2. Сессии для сохранения данных пользователя.
3. Запрос к базе данных (SQL) и вывод на страницу справочных материалов из базы.
4. Запрос к внешнему API сервису и вывод определенного результата в зависимости от результатирующего ответа.

<h3>Frontend:</h3>
1. Динамическая структура сайта на PHP, HTML, CSS, JS.
2. Header и Footer выведены в компоненты.
3. Работа отдельных кнопок и группы кнопок.
4. Раскрывающееся меню.
5. Модальные окна для вывода дополнительного материала.

# План работ (при возобновлении работы):
1. Доработать структуру базы данных (создать все таблицы и связи между ними).
2. Выстроить четкую структуру (на основе принципов mvc).
3. Привести к единообразному названию классов (BEM) и переменных.
4. Просмотреть код JS, CSS. Убрать задвоения (при необходимости повторяющийся код вывести в общий для всех страниц шаблон).
5. Доработать функционал (см командные кнопки на стр. Календарь).
6. Сделать интерфейс (админку) для наполнения сайта контентом (через пользовательскую форму добавлять, редактировать, удалять записи в таблицах базы данных).
7. Сделать модуль оплаты подписки и ее контроля.
