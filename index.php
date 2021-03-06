<?php
    $page_title = 'Тестове завдання';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Maksym Stefanko</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
             <?php require 'header_aside.php';?>
            <div class="main">
                <section>
                    <h2>Завдання 1</h2>
                    <p>У форму вводиться число N. Знайти всі досконалі числа до N.
Досконале число - це таке число, що дорівнює сумі всіх своїх дільників,
крім себе самого. Наприклад, число 6 є досконалим, тому що крім себе
самого ділиться на числа 1, 2 і 3, які в сумі дають 6.</p>
                </section>
                <section>
                    <h2>Завдання 2</h2>
                    <p>У форму вводиться текст, слова в якому розділені пробілами і
розділовими знаками. Вилучити з цього тексту всі слова найбільшої
довжини. (Слів найбільшої довжини може бути декілька).</p>
                </section>
                <section>
                    <h2>Завдання 3</h2>
                    <p>Вводяться N натуральних чисел більше 2. Підрахувати, скільки серед
них простих чисел.</p>
                </section>
                <section>
                    <h2>Завдання 4</h2>
                    <p>Політичне життя однієї країни дуже жваве. У країні діє K політичних
партій, кожна з яких регулярно оголошує національний страйк. Дні, коли
хоча б одна з партій оголошує страйк, за умови, що це не субота або неділя
(коли і так ніхто не працює), завдають великої шкоди економіці країни.
i-та партія оголошує страйки строго кожні bi днів, починаючи з дня з
номером ai. Тобто i-та партія оголошує страйки в дні ai, ai + bi, ai + 2bi і т.д.
Якщо в якийсь день кілька партій оголошує страйк, то це вважається
загальнонаціональним страйком.
У календарі країни N днів, пронумерованих від 1 до N. Перший день
року є понеділком, шостий і сьомий дні року - вихідні, тиждень складається
з семи днів.
Вхідні дані
Програма отримує на вхід число днів в році N (1 &ltN&lt1000000) і число
політичних партій K (1&ltK&lt100). Далі йде K рядків, що описують графіки
проведення страйків. i-й рядок містить числа ai і bi (1&ltai,bi&ltN).
Вихідні дані
Виведіть єдине число: кількість страйків, що відбулися протягом року.<br>Примітка
Перша партія оголошує страйки в дні 2, 5, 8, 11, 14, 17. Друга партія
оголошує страйки в дні 3, 8, 13, 18. Третя партія - в дні 9 і 17. Дні номер 6,
7, 13, 14 є вихідними. Таким чином, загальнонаціональні страйки пройдуть в
дні 2, 3, 5, 8, 9, 11, 17, 18.</p>
                </section>
                <section>
                    <h2>Завдання 5</h2>
                    <p>Задано текст. Словом вважається послідовність непробільних символів,
які йдуть підряд. Слова розділені одним або більшим числом пробілів або
символами кінця рядка.
Для кожного слова з цього тексту підрахуйте, скільки разів воно
зустрічалося в цьому тексті раніше. Використайте словники.</p>
                </section>
                <section>
                    <h2>Завдання 6</h2>
                    <p>Змагання з гри «Тетріс-онлайн» проводяться за такими правилами:
Кожен учасник реєструється на сайті гри під певним ігровим ім'ям. Імена
учасників не повторюються.
Чемпіонат проводиться протягом певного часу. У будь-який момент цього
часу будь-який зареєстрований учасник може зайти на сайт чемпіонату і
почати залікову гру. Після закінчення гри її результат (кількість балів)
фіксується і заноситься до протоколу.
Учасники мають право грати кілька разів. Кількість спроб одного учасника
не обмежується. Остаточний результат учасника визначається по одній грі,
кращою для даного учасника. Більш високе місце в змаганнях займає
учасник, що показав кращий результат. При рівності результатів більш
високе місце займає учасник, раніше показав кращий результат.
В ході змагань заповнюється протокол, кожен рядок якого описує одну гру
і містить результат учасника і його ігрове ім'я. Протокол формується в
реальному часі по ходу проведення чемпіонату, тому рядки в ньому
розташовані в порядку проведення ігор: чим раніше зустрічається рядок у
протоколі, тим раніше закінчилася відповідна цьому рядку гра.
Напишіть програму, яка за даними протоколу визначає переможця і
призерів. Гарантується, що в чемпіонаті бере участь не менше трьох гравців.</p>
                </section>
            </div>
            <footer>Автор: Стефанко Максим &copy <br> 2017 рік
            </footer>
        </div>
    </body>
</html>
