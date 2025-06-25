@extends('layout.app')
@section('content')

<section class="StrCont">
    <div class="StrCont__Container Container">
        <div class="StrCont__Main-flexs Main-flexs">
            <div class="StrCont__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>    
            <div class="StrCont__MainBlock MainBlock">
                <h1 class="StrCont__h1 Educational-h1">Структура и органы управления образовательной организацией</h1>

                <p class="StrCont__p-main">
                    Управление образовательной организацией осуществляется в соответствии с законодательством Российской Федерации, правовыми актами Волгоградской области, Уставом Колледжа.
                    <br><br>
                    Управление Образовательной организацией осуществляется в соответствии с законодательством Российской Федерации, на основе сочетания принципов единоначалия и коллегиальности.
                    <br><br>
                    Единоличным исполнительным органом Образовательной организации является директор, который осуществляет текущее руководство деятельностью Образовательной организации.
                    <br><br>
                    В Образовательной организации сформированы коллегиальные органы управления, к которым относятся:
                    <br><br>
                    Общее собрание работников и представителей обучающихся Образовательной организации (далее – Общее собрание)
                    <br><br>
                    Совет Образовательной организации (далее - Совет);
                    <br><br>
                    Педагогический Совет Образовательной организации;
                    <br><br>
                    Методический Совет Образовательной организации.
                    <br><br>
                    В образовательной организации создан Профсоюзный комитет, деятельность которого регулируется его Уставом и законодательством Российской Федерации.
                </p>
                <div class="StrCont__img-block">
                    <p class="StrCont__p-img">Организационная структура</p>
                    <img src="/storage/Header/images/Structuralunits.jpg" alt="Шьфпу" class="StrCont__img-img">
                    <p class="StrCont__p-img">Структурные подразделения (органы управления) образовательной организацией</p>
                </div>
                
                <ul class="StrCont__Vice-ul">
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">ЗАМЕСТИТЕЛЬ ДИРЕКТОРА ПО ФИНАНСАМ</h2>
                        <p class="StrCont__Vice-Name">Холодова Марина Юрьевна</p>
                        <p class="StrCont__Vice-adress">Адрес: 
                            400007, Россия, г. Волгоград, пр-кт Металлургов, д.17, каб.119
                        </p>
                        <p class="StrCont__Vice-number">Номер: 
                            8 (8442) 45-91-04, доп.105
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы:
                            Пн-пт 8.30 - 17.00
                            (перерыв 12.30 - 13. 00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">Заместитель директора по воспитательной работе</h2>
                        <p class="StrCont__Vice-Name">Тренина Ирина Анатольевна</p>
                        <p class="StrCont__Vice-adress">Адрес: 
                            400007, Россия, г. Волгоград, пр-кт Металлургов, д.17, каб.118
                        </p>
                        <p class="StrCont__Vice-number">Номер: 
                            8 (8442) 73-50-85
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                         
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы:
                            Пн-пт 8.30 - 17.00
                            (перерыв 12.30 - 13. 00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">ЗАМЕСТИТЕЛЬ ДИРЕКТОРА ПО УЧЕБНО-МЕТОДИЧЕСКОЙ РАБОТЕ</h2>
                        <p class="StrCont__Vice-Name">Иваненко Наталья Анатольевна</p>
                        <p class="StrCont__Vice-adress">Адрес: 
                            400007, Россия, г. Волгоград, пр-кт Металлургов, д.17, каб.108
                        </p>
                        <p class="StrCont__Vice-number">Номер: 
                            8 (8442) 45-91-38 доп.102
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                         
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы:
                            Пн-пт 8.30 - 17.00
                            (перерыв 12.30 - 13. 00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">Заместитель директора по производственному обучению</h2>
                        <p class="StrCont__Vice-Name">Самарская Татьяна Олеговна</p>
                        <p class="StrCont__Vice-adress">Адрес: 
                            400007, Россия, г. Волгоград, пр-кт Металлургов, д.17, каб.121
                        </p>
                        <p class="StrCont__Vice-number">Номер: 
                            8 (8442) 45-91-64 доп.103
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                         
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы:
                            Пн-пт 8.30-17.00
                            (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">Заместитель директора по административно-хозяйственной работе</h2>
                        <p class="StrCont__Vice-Name">Мухин Олег Анатольевич</p>
                        <p class="StrCont__Vice-adress">Адрес: 
                            400007, Россия, г. Волгоград, пр-кт Металлургов, д.17, каб.122
                        </p>
                        <p class="StrCont__Vice-number">Номер: 
                            8 (8442) 73-50-85, доп.103
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                         
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы:
                            Пн-пт 8.00-16.30
                            (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">КАФЕДРА «ПОЖАРНАЯ БЕЗОПАСНОСТЬ»</h2>
                        <p class="StrCont__Vice-Name">Руководитель (начальник отдела): Тимошина Оксана Викторовна</p>
                        <p class="StrCont__Vice-adress">Адрес:
                            400007, Россия, г. Волгоград, пр-кт Металлургов, д.17, каб.102
                           <br>
                           Адрес: 400007, Россия, г. Волгоград,ул Шурухина, д. 59 каб 30
                        </p>
                        <p class="StrCont__Vice-number">Номер: 
                            8 (8442) 73-50-85
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                         
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы:
                            Пн-пт 8.00-16.30 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">КАФЕДРА «ПОЛИГРАФИЯ»</h2>
                        <p class="StrCont__Vice-Name">Руководитель (начальник отдела): Мусина Нина Анатольевна</p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия, г. Волгоград, пр-кт Металлургов, д.17,каб.120
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (8442) 73-50-85
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                         
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.00-16.30 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">КАФЕДРА «ИНФОРМАЦИОННЫЕ ТЕХНОЛОГИИ»</h2>
                        <p class="StrCont__Vice-Name">Руководитель (начальник отдела): Котельникова Инга Александровна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия, г. Волгоград, пр-кт Металлургов, д.17,каб.120
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (8442) 73-50-85
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                         
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.00-16.30 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">КАФЕДРА «ЭКОНОМИКА»
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (заведующий): Майданникова Галина Ивановна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400006, Россия, г. Волгоград, улица Шурухина, д.59
                        </p>
                        <p class="StrCont__Vice-number"> Телефон: 8 (8442) 74-13-60
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                         
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30.-17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">КАФЕДРА «ЭНЕРГЕТИКА»
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (начальник отдела): Жупикова Марина Константиновна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия, г. Волгоград, пр-кт Металлургов, д.17, каб.102
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (8442) 73-50-85
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                         
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.00-16.30 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">КАФЕДРА «АВТОМАТИЗАЦИЯ»
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (заведующий): Русских Александр Аркадьевич 
                        </p>
                        <p class="StrCont__Vice-adress">
                                корпус Нестерова 1а, каб 13, индекс 400064
                        </p>
                        <p class="StrCont__Vice-number">
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                         
                        </p>
                        <p class="StrCont__Vice-Worktime">
                                Режим работы: Пн-пт 8.30.-17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">КАФЕДРА «ЗЕМЛЕУСТРОЙСТВО»
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (заведующий): Ефимова Алмагуль Кажимуратовна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400064, Россия, г. Волгоград, ул. Нестерова, 1а, каб. 29
                        </p>
                        <p class="StrCont__Vice-number">
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30.-17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">КАФЕДРА «ТРАНСПОРТ»
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (заведующий): Барякаев Александр Юрьевич
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400064, Россия, г. Волгоград, ул. Нестерова, 1а, каб. 10
                        </p>
                        <p class="StrCont__Vice-number">
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30.-17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">КАФЕДРА «ФИНАНСЫ»
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (заведующий): Цыбанева Наталья Александровна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400064, Россия, г. Волгоград, ул. Нестерова, 1а, каб. 9
                        </p>
                        <p class="StrCont__Vice-number">
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30.-17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">УЧЕБНО-МЕТОДИЧЕСКИЙ ОТДЕЛ:
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (начальник отдела): Клинова Оксана ВАсильевна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия, г. Волгоград, пр-кт Металлургов, д.17, каб.128
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (8442) 73-50-85
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.00-16.30 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">УЧЕБНЫЙ ОТДЕЛ:
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (начальник отдела): Панкова Людмила Александровна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400002, Россия, г. Волгоград, Нестерова 1а, кабинет 16, индекс 400064
                        </p>
                        <p class="StrCont__Vice-number">
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.00-16.30 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">ОТДЕЛ ПРАКТИЧЕСКОГО ОБУЧЕНИЯ:
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (начальник отдела): Власова Ирина Анатольевна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия, г. Волгоград, пр-кт Металлургов, д.17, каб.128
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (8442) 73-50-85
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30- 17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">ВОСПИТАТЕЛЬНЫЙ ОТДЕЛ:
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (начальник отдела): Вахабова Асият Абдулмежидовна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400002, Россия, г. Волгоград, Нестерова 1а, кабинет 16, индекс 400064
                        </p>
                        <p class="StrCont__Vice-number">
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.00- 16.30 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">ЦЕНТР ОПЕРЕЖАЮЩЕЙ ПРОФЕССИОНАЛЬНОЙ ПОДГОТОВКИ (ЦОПП)
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель( директор Центра):
                            Заместитель директора: Центра: Гугнина Анастасия Сергеевна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия, г. Волгоград, пр-кт Металлургов, д.17 каб.103
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (8442) 32-53-93
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30.-17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">УЧЕБНО-ПРОИЗВОДСТВЕННЫЙ ТЕХНОПАРК
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель: Сидоренко Дмитрий Владимирович
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 403003, Волгоградская область, Городищенский район, р.п. Городище, ул. Центральная, дом 105
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (84468) 61-36-20 доп. 109,110
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30.-17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">БАЗОВЫЙ ЦЕНТР СОДЕЙСТВИЯ ТРУДОУСТРОЙСТВУ:
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (начальник отдела): Мусиенко Иван Николаевич
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия, г. Волгоград, пр-кт Металлургов, д.17 каб.117
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (8442) 73-50-85
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30- 17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">РЕГИОНАЛЬНЫЙ ЦЕНТР ДЕМОНСТРАЦИОННОГО ЭКЗАМЕНА:
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (начальник отдела):
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия, г. Волгоград, пр-кт Металлургов, д.17
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (8442) 73-50-85
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30- 17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">БИБЛИОТЕКА
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (педагог-библиотекарь): Альбова Зоя Владимировна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия, г. Волгоград, пр-кт Металлургов, д.17 каб.117
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (8442) 73-50-85
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30- 17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">ПРАВОВОЙ ОТДЕЛ
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель( начальник отдела): Гирчева Наталья Ивановна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия, г. Волгоград, пр-кт Металлургов, д.17 каб.106
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (8442) 73-50-85 доп.114
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.00.-16.30 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">СЕКТОР КАДРОВОГО ОБЕСПЕЧЕНИЯ
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель( начальник отдела): Зинкевич Елена Викторовна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия, г. Волгоград, пр-кт Металлургов, д.17 каб.103
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (8442) 73-50-85 доп.121
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30.-17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">ОТДЕЛ ЭКОНОМИКИ И ЗАКУПОК
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (начальник отдела):  Короткова Екатерина Алексеевна
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия, г. Волгоград, пр-кт Металлургов, д.17 каб.110
                        </p>
                        <p class="StrCont__Vice-number">Телефон: 8 (8442) 45-91-04; 72-94-02
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30.-17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">Среднеахтубинский филиал ГБПОУ "Волгоградский технический колледж"
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель: Досов Адилжан Туткишевич
                        </p>
                        <p class="StrCont__Vice-adress">Адрес: 404143, Волгоградская область, Среднеахтубинский район, р.п. Средняя Ахтуба, ул. Кузнецкая-1 д.32
                        </p>
                        <p class="StrCont__Vice-number">Телефоны: +7 (884479) 5-15-37
                        </p>
                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <a href="http://училище50.рф" class="StrCont__Vice-link">Ссылка на сайт:
                           <span class="StrCont__link-span">училище50.рф</span>
                        </a>
                        <p class="StrCont__Vice-Worktime">
                        Режим работы: понедельник - пятница 08.00 - 16.30 <br>
                        перерыв 12.00-12.30 <br>
                        выходные дни: суббота, воскресенье
                        </p>
                    </li>
                    <li class="StrCont__Vice-li">
                        <h2 class="StrCont__Vice-title">ОБЩЕЖИТИЕ
                        </h2>
                        <p class="StrCont__Vice-Name">Руководитель (комендант): Кузнецова Галина Викторовна</p>
                        <p class="StrCont__Vice-adress">Адрес: 400005, Россия г. Волгоград, ул. Коммунальная, д. 18;</p>
                        <p class="StrCont__Vice-number">Телефон: 8( 8442) 23-12-90</p>

                        <p class="StrCont__Vice-Name">Комендант : Скворцова Татьяна Ивановна</p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия г. Волгоград, ул. Вершинина, д.10;</p>
                        <p class="StrCont__Vice-number">Телефон: 8( 8442) 73-22-07</p>

                        <p class="StrCont__Vice-Name">Комендант : Медведева Светлана Георгиевна</p>
                        <p class="StrCont__Vice-adress">Адрес: 400007, Россия г. Волгоград, ул. Брасовская, д.15;</p>
                        <p class="StrCont__Vice-number">Телефон: 8( 8442) 74-13-60</p>

                        <p class="StrCont__Vice-mail">E-mail: 
                            
                        </p>
                        <p class="StrCont__Vice-Worktime">Режим работы: Пн-пт 8.30.-17.00 (перерыв 12.30-13.00)
                        </p>
                    </li>
                </ul>       
            </div>
        </div>
    </div>
</section>
  
@endsection           