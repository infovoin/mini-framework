# test
**Краткий экскурс**
Дабы сэкономить смотрящему время
<ul>
  <li> Код соответствует стандартам PSR1 PSR2 </li>
  <li> В базовом классе Модели Реализован ORM (мы сразу получаем из базы объекты нужного класса) и AR (стандартный набор CRUD) для реализации используется позднее статическое связывание </li>
  <li> В нижнем слое абстракции классе DB в случаи возникновения ошибки при выполнении запроса или подключения к базе создаются объекты исключений, которые бросаются и ловятся в коде выше, во фронт контроллере </li>

  <li> Фронт контроллер работает в соответствии со следующей системой адресов: /Controller/Action/ например /news/one/?id=5 </li>
  <li> Autoload реализован по стандарту PSR4 </li>

  <li> Есть папочка с "Trains"</li>
        <ol> TSetGetIsset - трейт реализующий магические методы __get __set __isset магия применяется например в Базовом классе View для заполнения объекта. По-моему, так же сделано и в Yii </ol>
        <ol> Titerator - реализует стандартный Интерфейс Iterator. Подключив этот трейт к какому-либо классу, мы получим возможность в foreach проходить по свойствам объекта. </ol>
        <ol> TArrayAccess - реализуем стандартный Интерфейс ArrayAccess позволяет обращаться к объектам как к массиву но при этом объект остаётся объектом. </ol>
  
  <li> Для чего понадобилось реализовывать эти интерфейсы. Например для архитектурного решения называемого "Мульти исключение" (App\Exceptions\MultiException) шикарный архитектурный приём. 
  Он позволяет создать объект исключения который будет хранить в себе другие исключения. Например при валидации формы, 
  мы получаем возможность создавать объект исключения на каждое неверно заполненных поле в форме. Допустим из 7 полей 3 заполнены неверно, создаются 3 объекта исключения \Exception 
  все они помещаются в объект класса MultiException который в итоге мы успешно можем бросить throw и он всплывёт выше по коду.</li>
        
  <li> Класс App\Classes\Config</li>
  <li> Есть класс ведения логов App\Classes\Config</li>

  <li> В нашем классе App\Classes\DB есть замечательный метод queryEach() который возвращает нам анонимную функцию реализующую "генератор"
  Для чего? "Память" главный смысл генераторов — это память. Массив из 10 элементов потребует в 10 раз больше памяти чем генератор, по тому что генератор не хранит в себе элементы, он хранит в себе алгоритм как их генерировать.</li>
</ul>
