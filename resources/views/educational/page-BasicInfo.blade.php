@extends('layout.app')
@section('content')

<section class="BasicInfo">
    <div class="BasicInfo__Container Container">
        <div class="BasicInfo__Main-flexs Main-flexs">
            <div class="BasicInfo__LinkList LinkList">
                @include('educational.list.LinkList')
            </div>     
            <div class="BasicInfo__MainBlock MainBlock">

                <h1 class="BasicInfo__h1 Educational-h1">Сведения об образовательной организации</h1>
                <h2 class="BasicInfo__h2">ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ПРОФЕССИОНАЛЬНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ «ВОЛГОГРАДСКИЙ ТЕХНИЧЕСКИЙ КОЛЛЕДЖ»</h2>

                <div class="BasicInfo__data-block">
                    <h3 class="BasicInfo__h3">Дата создания (хронологическая справка)</h3>
                    <ul class="BasicInfo__data-ul">

                        <li class="BasicInfo__data-li">
                             Постановлением Совета Министров СССР от 17 июня 1949 г.     № 2435 Министерству лесного хозяйства СССР дано указание организовать в 1951 году в городе Сталинграде лесной техникум. Постановление подписано председателем Совета Министров СССР И.В. Сталиным.  
                        </li>
                        <li class="BasicInfo__data-li">
                             Приказом Министерства сельского хозяйства РСФСР от 21 мая 1957 г. № 81 лесной техникум был переименован в Сталинградский сельскохозяйственный техникум. 
                        </li>
                        <li class="BasicInfo__data-li">
                             10 ноября 1969 г. город Сталинград по решению ХХII съезда КПСС был переименован в Волгоград, в этой связи Сталинградский сельскохозяйственный техникум стал именоваться как Волгоградский сельскохозяйственный техникум. 
                        </li>
                        <li class="BasicInfo__data-li">
                             Постановлением Бюро ЦК КПСС по РСФСР и Совета Министров РСФСР от 27 июля 1964 г. № 921 Волгоградский сельскохозяйственный техникум был реорганизован в Волгоградский гидромелиоративный техникум. 
                        </li>
                        <li class="BasicInfo__data-li">
                             Приказом Министерства сельского хозяйства РСФСР   от 28 сентября 1984 г. № 668 Волгоградский гидромелиоративный техникум был переименован в Волгоградский сельскохозяйственный техникум.
                        </li>
                        <li class="BasicInfo__data-li">
                             Приказом Министерства сельского хозяйства РСФСР   от 28 сентября 1986 г. № 720 Волгоградский сельскохозяйственный техникум был переименован в Волгоградский гидромелиоративный техникум. 
                        </li>
                        <li class="BasicInfo__data-li">
                             Приказом Государственного агропромышленного комитета РСФСР  от 3 августа 1990 г. № 830-к Волгоградский гидромелиоративный техникум был переименован в Волгоградский гидромелиоративный колледж. 
                        </li>
                        <li class="BasicInfo__data-li">
                             Приказом Министерства сельского хозяйства Российской Федерации от 26 марта 1992 г. № 197 Волгоградский гидромелиоративный колледж преобразован в Волгоградский технический колледж. 
                        </li>
                        <li class="BasicInfo__data-li">
                             Приказом Министерства сельского хозяйства и продовольствия Российской Федерации            от 17 февраля 1999 г. № 71 переименован в Федеральное государственное образовательное учреждение среднего профессионального образования Волгоградский технический колледж. 
                        </li>
                        <li class="BasicInfo__data-li">
                             Приказом Министерства образования и науки Российской Федерации от 14 ноября 2011 г. № 2669 Федеральное государственное образовательное учреждение среднего профессионального образования Волгоградский технический колледж было переименовано в Федеральное государственное бюджетное образовательное учреждение среднего профессионального образования "Волгоградский технический колледж". 
                        </li>
                        <li class="BasicInfo__data-li">
                             Федеральное государственное бюджетное образовательное учреждение среднего профессионального образования "Волгоградский технический колледж" распоряжением Правительства Российской Федерации  от 29 декабря 2011 г. № 2413-р "О передаче субъектам Российской Федерации федеральных государственных образовательных учреждений среднего профессионального образования" передано в ведение Волгоградской области и в соответствии с постановлением Администрации Волгоградской области   от 27 февраля 2012 г. № 122-п "О переименовании государственных образовательных учреждений среднего профессионального образования" переименовано в государственное бюджетное образовательное учреждение среднего профессионального образования "Волгоградский технический колледж". 
                        </li>
                        <li class="BasicInfo__data-li">
                            Постановлением Администрации Волгоградской области от 22 апреля 2015 г. № 201-п "О переименовании государственных образовательных учреждений, подведомственных Комитету образования и науки Волгоградской области" государственное бюджетное образовательное учреждение среднего профессионального образования "Волгоградский технический колледж" переименовано в
                        </li>

                    </ul>
                    Государственное бюджетное профессиональное образовательное учреждение "Волгоградский технический колледж"
                    (сокращенное наименование ГБПОУ «Волгоградский технический колледж»)
                </div>

                <div class="BasicInfo__founder-block">
                    <h3 class="BasicInfo__h3">Данные об учредителе:</h3>
                    <p class="BasicInfo__founder-p">Учредителем колледжа является Волгоградская область. Функции и  полномочия Учредителя осуществляет <a href="https://obraz.volgograd.ru" class="BasicInfo__a-founder">Комитет образования, науки и Волгоградской области</a></p>

                    <table class="BasicInfo__founder-table">
                        <tr class="BasicInfo__founder-tr">
                            <td class="BasicInfo__founder-td-M">
                                Учредитель
                            </td>
                            <td class="BasicInfo__founder-td-M">
                                Место нахождения
                            </td>
                            <td class="BasicInfo__founder-td-M">
                                Официальный Сайт
                            </td>
                            <td class="BasicInfo__founder-td-M">
                                Адрес Электронной почты
                            </td>
                            <td class="BasicInfo__founder-td-M">
                                Тел./факс.
                            </td>
                        </tr>
                        
                        <tr class="BasicInfo__founder-tr">
                            <td class="BasicInfo__founder-td">
                            Комитет образования, науки Волгоградской области
                            </td>
                            <td class="BasicInfo__founder-td">
                                B400074 Волгоград, улица Огарева, 6
                            </td>
                            <td class="BasicInfo__founder-td">
                                obraz.volgograd.ru	
                            </td>
                            <td class="BasicInfo__founder-td">   
                                <a href="mailto:education@volganet.ru" class="BasicInfo__mail">education@volganet.ru</a>
                            </td>
                            <td class="BasicInfo__founder-td">
                                (8442) 30-86-00
                                <br>
                                (8442) 30-86-87 
                            </td>
                        </tr>

                    </table>
                </div>

                <div class="BasicInfo__adress-block">
                    <h2 class="BasicInfo__adress-h2">Информация о месте нахождения образовательной организации и режиме работы</p> 
                    <div class="BasicInfo__adress-block-2">
                        <h3 class="BasicInfo__h3">Юридический Адресс:</h2>
                        <p class="BasicInfo__p-1">400011, Россия, г. Волгоград,  пр. Университетский, 34</p>
                    </div>
                    <div class="BasicInfo__adress-block-2">
                        <h3 class="BasicInfo__h3">Фактический Адресс:</h2>
                        <ul class="BasicInfo__adress-ul">

                            <li class="BasicInfo__adress-li">
                                <p class="BasicInfo__p-1">400007, Россия, г. Волгоград, пр. Металлургов, 17</p>
                            </li>
                            <li class="BasicInfo__adress-li">
                                <p class="BasicInfo__p-1">400064, Россия, г. Волгоград, ул. Нестерова, 1а</p>
                            </li>
                            <li class="BasicInfo__adress-li">
                                <p class="BasicInfo__p-1">400006, Россия, г. Волгоград, ул. Шурухина, 59</p>
                            </li>
                            <li class="BasicInfo__adress-li">
                                <p class="BasicInfo__p-1">400011, Россия, г. Волгоград,  пр. Университетский, 34</p>
                            </li>
                        </ul>
                    </div>
                    <div class="BasicInfo__adress-block-2">
                        <h2 class="BasicInfo__h3">Телефоны:</h2>


                        <div class="BasicInfo__adress-tel-block">

                            <ul class="BasicInfo__adress-tel-ul">
                                <li class="BasicInfo__adress-tel-li">
                                    <p class="BasicInfo__p-1">8(8442) 45-91-21, 8(8442) 73-50-85</p>
                                    -
                                    <p class="BasicInfo__p-1">приемная директора</p>
                                </li>
                                <li class="BasicInfo__adress-tel-li">
                                    <p class="BasicInfo__p-1">8(8442) 41-67-39, 8(8442) 45-91-48</p>
                                    -
                                    <p class="BasicInfo__p-1">учебный отдел</p>
                                </li>
                                <li class="BasicInfo__adress-tel-li">
                                    <p class="BasicInfo__p-1">8(8442) 45-91-04, 8(8442) 72-94-02</p>
                                    -
                                    <p class="BasicInfo__p-1"> бухгалтерия</p>
                                </li>
                                <li class="BasicInfo__adress-tel-li">
                                    <p class="BasicInfo__p-1">8(8442) 45-91-58, 8(8442) 73-50-85 (114, 121)</p>
                                    -
                                    <p class="BasicInfo__p-1">отдел правового, кадрового и документационного обеспечения</p>
                                </li>
                                <li class="BasicInfo__adress-tel-li">
                                    <p class="BasicInfo__p-1">8(8442) 45-91-38</p>
                                    -
                                    <p class="BasicInfo__p-1">приемная комиссия</p>
                                </li>
                            </ul>

                        </div>               
                    </div>
                    <div class="BasicInfo__adress-block-2">
                        <h3 class="BasicInfo__h3">E-mail:</h3>
                        <ul class="BasicInfo__adress-ul">

                            <li class="BasicInfo__adress-li">
                                <a href="mailto:volgtehkol@volganet.ru" class="BasicInfo__mail">volgtehkol@volganet.ru</a>
                            </li>

                        </ul>    
                    </div>
                </div>

                <div class="BasicInfo__schedule-block">
                    <h3 class="BasicInfo__h3">Режим и график работы:</h3>
                    <div class="BasicInfo__schedule-block-1">
                        <h4 class="BasicInfo__h4">Учебно-методический отдел:</h4>
                        <p class="BasicInfo__schedule-p">пн-пт с 8.00 до 16.30, обед с 12.00 до 12.30</p>
                    </div>
                    <div class="BasicInfo__schedule-block-1">
                        <h4 class="BasicInfo__h4">Время приема граждан:</h4>

                        <p class="BasicInfo__schedule-p">Вторник: 10.00 - 12.00</p>
                        <p class="BasicInfo__schedule-p">Четверг: 14.00 - 16.00</p>
                    </div>
                    <div class="BasicInfo__schedule-block-1">
                        <h4 class="BasicInfo__h4">Администрация, бухгалтерия и другие структурные подразделения колледжа:</h4>
                        <p class="BasicInfo__schedule-p">с 8.00 до 17.00, обед с 12.00 до 12.30</p>
                    </div>
                </div>

                <div class="BasicInfo__branch">
                    <h3 class="BasicInfo__h3">Среднеахтубинский филиал ГБПОУ "Волгоградский технический колледж"</h3>

                    <div class="BasicInfo__branch-block">
                        <h4 class="BasicInfo__h4">Руководитель/Руководители:</h4>
                        
                        <ul class="BasicInfo__Branch-ul">
                            <li class="BasicInfo__Branch-li">

                                 <p class="BasicInfo__Branch-Supervisor">Досов Адилжан Туткишевич</p>
                            
                            </li>
                        </ul>
                       

                    </div>

                    <div class="BasicInfo__branch-adress-block">
                        <h4 class="BasicInfo__h4">
                            Адрес:
                        </h4>
                        <p class="BasicInfo__branch-adress-p">
                        404143, Волгоградская область, Среднеахтубинский район, р.п. Средняя Ахтуба, ул. Кузнецкая-1 д.32  
                        </p>
                    </div>

                    <div class="BasicInfo__branch-tel-block">
                        <h4 class="BasicInfo__h4">
                            Телефоны:
                        </h4>
                        <ul class="BasicInfo__branch-tel-ul">

                            <li class="BasicInfo__branch-tel-li">
                                <p class="BasicInfo__branch-tel-p">
                                    +7 (884479) 5-15-37
                                </p>
                            </li>
                            
                        </ul>       
                    </div>

                    <div class="BasicInfo__branch-Email-block">
                        <h4 class="BasicInfo__h4">
                            E-mail:
                        </h4>
                        <ul class="BasicInfo__branch-Email-ul">

                            <li class="BasicInfo__branch-Email-li">
                                <a href="mailto:volgtehkol@volganet.ru" class="BasicInfo__branch-Email-p">
                                    volgtehkol@volganet.ru
                                </a>
                            </li>

                        </ul>
                        

                    </div>

                    <div class="BasicInfo__branch-site-block">
                        <h4 class="BasicInfo__h4">
                            Ссылка на сайт:
                        </h4>
                        <a href="http://училище50.рф" class="BasicInfo__branch-site-link">
                            училище50.рф    
                        </a>
                    </div>

                    <div class="BasicInfo__branch-operation-block">

                        <div class="BasicInfo__branch-operation-block-1">
                            <h4 class="BasicInfo__h4">Режим работы:</h4>
                            <p class="BasicInfo__operation-p">понедельник - пятница 08.00 - 16.30 <br> перерыв 12.00 - 12.30</p>
                        </div>
                        <div class="BasicInfo__branch-operation-block-1">
                            <h4 class="BasicInfo__h4">Выходные дни:</h4>
                            <p class="BasicInfo__operation-p">суббота, воскресенье</p>
                        </div>

                    </div>

                    <div class="BasicInfo__branch-Dormitory-block">
                        <h3 class="BasicInfo__h3">
                            Общежитие:
                        </h3>

                        <ul class="BasicInfo__branch-Dormitory-ul">

                            <li class="BasicInfo__branch-Dormitory-li">
                                <p class="BasicInfo__branch-Dormitory-p">
                                    400005, Россия, г. Волгоград, ул. Коммунальная, 18 Телефон: 8(8442) 23-12-90
                                </p>
                            </li>
                            <li class="BasicInfo__branch-Dormitory-li">
                                <p class="BasicInfo__branch-Dormitory-p">
                                   400006, Россия, г. Волгоград, ул. Брасовская, 15 Телефон: 8(8442) 74-13-60
                                </p>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="BasicInfo__technopark">
                        <h3 class="BasicInfo__h3">
                            Учебно-производственный технопарк:
                        </h3>
                    <div class="BasicInfo__technopark-block">
                        <h4 class="BasicInfo__h4">
                            Адрес:
                        </h4>
                        <p class="BasicInfo__technopark-p">
                        403003, Россия, Волгоградская область, Городищенский район,

                        </p>
                        <p class="BasicInfo__technopark-p-3">
                            р.п. Городище, ул. Центральная, 105
                        </p>
                    </div>
                    <div class="BasicInfo__technopark-block">
                        <h4 class="BasicInfo__h4">
                            Телефоны:
                        </h4>
                        <ul class="BasicInfo__technopark-ul">

                            <li class="BasicInfo__technopark-li">
                                <p class="BasicInfo__technopark-p">
                                    8( 8442) 61-36-20
                                </p>
                            </li>
                            
                        </ul>       
                    </div>
                    <div class="BasicInfo__technopark-Email-block">
                        <h4 class="BasicInfo__h4">
                            E-mail:
                        </h4>

                        <ul class="BasicInfo__technoparkh-Email-ul">

                            <li class="BasicInfo__technopark-Email-li">
                                <a href="mailto:" class="BasicInfo__technopark-Email-p">
                                    
                                </a>
                            </li>

                        </ul>
                        
                    </div>
                    <div class="BasicInfo__technopark-site-block">
                        <h4 class="BasicInfo__h4">
                            Ссылка на сайт:
                        </h4>
                        <a href="http://www.volgtehkol.ru/" class="BasicInfo__technopark-site-link">
                            http://www.volgtehkol.ru/
                        </a>
                    </div>
                </div>

                <div class="BasicInfo__addlinks">

                    <ul class="BasicInfo__addlinks-ul">
                        <li class="BasicInfo__addlinks-li">
                            <a href="https://vk.com/vtk_professionalitet" class="BasicInfo__addlinks-link">https://vk.com/vtk_professionalitet</a>
                        </li>   
                    </ul>
                    
                </div>

                <div class="BasicInfo__PartnerMap">
                    <a href="/storage/Header/images/Partnerscard.doc" class="BasicInfo__PartnerMap-a">Карта Партнера</a>
                </div>
            </div>
        </div>
    </div>
</section>
  
@endsection