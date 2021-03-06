PHP - projects на основе тренинга **EPAM Systems "PHP Web Development"** 🚀

### Lab2_wt:

2.1.	Чтение из командной строки произвольного набора параметров и определение для каждого параметра типа данных (дробное число, целое число, строка).

2.2	Генерацию HTML-таблицы с указанным количеством строк (передаётся как параметр команд-ной строки); 
    в каждой строке таблицы должен быть указан её номер.

2.3.	Отображение многомерного (не менее пяти уровней) массива в браузере таким образом, 
    что чтобы элементы первого уровня отображались красным цветом, второго – синим, третьего – зелёным, четвёртого – фиолетовым, пятого и далее – жёлтым.	

2.4.	Подсчёт суммы цифр в числе, передаваемым как параметр командной строки (например, для числа 123 сумма цифр равна 6).

2.5.	Чтение из командной строки произвольного количества слов (каждое слово – отдельный пара-метр командной строки) 
    и определение самого длинного слова 
    (или самых длинных слов, если таких окажется больше одного).
    
### Lab3_wt:
    
3.1.	Получение через GET-запрос произвольного списка городов, 
    устранение дубликатов, 
    сортировку итогового набора городов по алфавиту (по возрастанию).

3.2.	Получение через GET-запрос произвольного текста и отображение его в браузере со следующими изменениями: 
    каждое третье слово должно быть в верхнем регистре, 
    каждая третья буква всех слов должна быть фиолетовой.

3.3.	Получение через POST-запрос двух произвольных наборов чисел и объединение их в один набор таким образом, чтобы в результирующем наборе оказались все числа из первого     набора и такие числа из второго набора, которых нет в первом (например, если в первом наборе есть числа «2 2 5 3 7 2», а во втором «2 4 4 85», 
    то в результирующем наборе будут числа «2 2 5 3 7 2 4 4 85» («2» из второго набора не попадает в итоговый набор, т.к. «2» уже есть в первом наборе).

3.4.	Получение (на выбор) через POST- или GET-запрос произвольной строки
    и перестановку слов в ней в обратном порядке 
    (например, строка «раз два три четыре» должна будет превратиться в «четыре три два раз»).

3.5.	Обработку произвольного многомерного массива 
    (допускается явная инициализация такого массива внутри программы) 
    таким образом, что все целые числа умножаются на два, 
    все дроби округляются до сотых, 
    все строки переводятся в верхний регистр.
    
### Lab4_wt:
    
4.1.	Создайте класс FormBuilder, который будет позволять формировать HTML-форму. 
Например, такое использование вашего класса

$formBuilder = new FormBuilder(FormBuilder::METHOD_POST, '/destination.php', 'Send!');
$formBuilder->addTextField('someName', 'Default value');
$formBuilder->addRadioGroup('someRadioName', ['A', 'B']);
$formBuilder->getForm();

должно приводить к генерации такого HTML-кода:

<form method="post" target="/destination.php">
 <input type="text" name="someName" value="Default value" />
 <input type="radio" name="someRadioName" value="A" />
 <input type="radio" name="someRadioName" value="B" />
 <input type="submit" value="Send!" />
</form>

4.2.	Создайте класс SafeFormBuilder, унаследованный от класса FormBuilder из первого задания, который будет анализировать суперглобальные массивы $_POST и $_GET и (если там есть данные, полученные при предыдущей отправки формы) формировать значения по умолчанию для соответствующих полей. 
Например, если в вашей форме есть поле <input type="text" name="someName" />, и в суперглобальном массиве $_POST есть элемент someName со значением «ABC», 
то ваш класс должен генерировать такой код: <input type="text" name="someName" value="ABC" />.

4.3.	Создайте класс Logger, который будет при создании объекта позволять указывать, выводить ли сообщение на экран или в файл, 
а также будет добавлять к каждому сообщению (в начало) дату и время.

4.4.	Создайте класс SmartDate, который бы при создании объекта получал значение даты и для этой даты мог определять:
является ли этот день выходным (СБ, ВС); 
расстояние в указанных единицах времени между этим днём и сегодняшним днём; 
является ли год, к которому относится дата, високосным.

4.5.	Создайте класс CryptoManager, 
который позволял бы шифровать и дешифровывать переданный текст; 
алгоритм шифрования и пароль должны передаваться в конструктор.

### Lab5_wt:
    
5.1.	Определить возраст человека (по дате его рождения) с точностью до дня.

5.2.	Определить полный суммарный объём файлов в указанном каталоге (и подкаталогах).

5.3.	Преобразовать многомерный массив в одномерный с устранением значений-дубликатов.

5.4.	Подсчитать, сколько раз в тексте встречается каждая имеющаяся там буква (например, в тексте «тест» буква «т» встречается дважды, буквы «е» и «с» по одному разу.

5.5.	Установить соединение с MySQL, определить версию MySQL.

### Lab6_wt:
    
6.1.	Файловый менеджер, позволяющий загружать файлы на сервер, просматривать список загруженных файлов, скачивать файлы с сервера, удалять файлы на сервере.

6.2.	Систему аутентификации для файлового менеджера (из задания 1), позволяющую пользователям авторизоваться по логинам и паролям, хранящимся на сервере в текстовом файле.

6.3.	Модификацию системы аутентификации (из задания 2), использующую логины и пароли, хранящиеся в базе данных (под управлением MySQL).

### Lab7_wt:

Напишите на PHP следующие веб-приложения:

7.1.	Приложение для выкачивания изображений, которое получает URL и сохраняет в указанный каталог на локальном диске все изображения, имеющиеся по этому адресу.

7.2.	Модифицированное приложение для выкачивания изображений, которое получает URL, а затем анализирует эту страницу и её подстраницы, формируя локальный каталог изображений. Для облегчения задачи вы можете реализовать приложение, работающее с одним конкретным сайтом. Например, если вы выберете http://wallpaperswide.com/, то ваше приложение должно скачать все обои и разложить их по каталогам, одноимённым разделам сайта.

7.3.	Приложение для агрегации погодных данных, которое будет для указанного города собирать прогноз погоды на завтра с как минимум пяти разных погодных сайтов и выводить усреднённый прогноз температуры

