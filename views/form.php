<?php
require('views/template/header.php');
?>


  <section class = 'wraper'>
    
    <header>
      <h2>Расскажите немного о себе...</h2>
    </header>
    
    <form method="post" action="#" enctype="text/plain">
      <fieldset class="fieldset-w-border short-info">
        <legend>
          <span>Коротко о себе</span>
        </legend>
        <p>
          <label> Имя: 
            <input  type="text" name="firstname"                     
                    pattern="[A-Za-zА-Яа-яіїёєІЇЁЄ\s]{2,}"                       
                    required/>
            </label>
        </p>
        <p>
          <label> Фамилия: 
            <input  type="text" name="lastname"
                     pattern="^[A-Za-zА-Яа-яіїёєІЇЁЄ\s]+$"   
                    required/>
          </label>
        </p>        
        <p>
          <span>Пол:</span>
            <input  type="radio" name="gender"                      
                    value="male" checked/>
            <span class='text-after-iput'>мужской</span>
            <input  type="radio" name="gender"                       
                    value="female"/>
            <span class='text-after-iput'>женский</span>
        </p> 
        <p>
          <label> Возраст: 
            <input  type="number" min="10"                       
                    max="100" name="age"/>                                           
            <span class='text-after-iput'>лет</span>
          </label>
        </p>
      </fieldset>
      
      <fieldset class="fieldset-w-border">
        <legend>
          <span>Подробнее о себе</span>
        </legend>
        <fieldset class="input-group">
          <p><input type="radio" name="gender2" 
                    value="male" checked/>
              <span class="text-after-iput">Молодой человек</span>
          </p>
          <p><input type="radio" name="gender2" 
                    value="female"/>
              <span class="text-after-iput">Девушка</span>
          </p>
          <p>
            <input type="date" name="bday"/>
            <span class="text-after-iput"> Дата рождения</span>
          </p> 
          <p>
            <input type="text" name="family_status"/>
            <span class="text-after-iput">Семейное положение</span>
          </p>
          <p>
            <input type="text" name="social_status"/>
            <span class="text-after-iput"> Социальный статус</span>
          </p>
          <p>
            <input type="text" name="home_address"/>
            <span class="text-after-iput"> Место жительства</span>
          </p>
        </fieldset >
          
        <fieldset class="input-group">
          <legend>
            <span>Что вы обычно делаете на выходных:</span>
          </legend>
          <p>
            <input type="checkbox" name="leisure1" value="sleep">
            <span class="text-after-iput"> Сплю</span>
          </p>
          <p>
            <input type="checkbox" name="leisure2" value="friends"> 
            <span class="text-after-iput"> Гуляю с друзьями</span>
          </p>
          <p>
            <input type="checkbox" name="leisure3" value="fishing"> 
            <span class="text-after-iput">Хожу на рыбалку</span>
          </p>
        </fieldset>

        <fieldset class="input-group">
          <legend>
            <span>Рассказать о формах в книге, посвященной HTML:</span>
          </legend>
          <select name="site_frequency">
            <option disabled selected value="">Site frequency:</option>
            <option value="w3schools">w3schools.com</option>
            <option value="javascriptRu">javascript.ru</option>
            <option value="stackoverflow">stackoverflow.com</option>
            <option value="mdn">developer.mozilla.org</option>
          </select>
        </fieldset>

        <fieldset class="input-group">
          <legend>
            <span>Сколько книг вы прочитали за свою жизнь:</span>
          </legend>
          <p>
            <input type="radio" name="many-books" value="0-10"/> 
            <span class="text-after-iput">0-10</span>
          </p>
          <p>
            <input type="radio" checked name="many-books" value="11-20"/>
            <span class="text-after-iput">11-20</span>
          </p>
          <p>
            <input type="radio" name="many-books" value="21-50">
            <span class="text-after-iput">21-50</span> 
          </p>
          <p>
            <input type="radio" checked name="many-books" value="50+"> 
            <span class="text-after-iput">50+</span>
          </p>
        </fieldset>
              
        <label class="label-top" for="comment"><span>Ваши комментарии:</span></label>
        <textarea id="comment" name="comment" maxlength="200" rows="9" ></textarea>
      
        <p>
          <select class="multi-select" multiple name="multiple" >
            <option value="f-position">Первая позиция</option>
            <option selected value="s-position">Вторая позиция</option>
            <option value="th-position">Третья позиция</option>
            <option value="fo-position">Четвертая позиция</option>
          </select>
        </p>
      </fieldset>
      
      <fieldset class="fieldset-w-border short-info">
        <legend>
          <span >И в заключении</span>
        </legend>
        <p>
          <input class="last-text-input" type="text" name="inp-def-val" value="Это поле было введено до вас"/>
        </p>
        <p>
          <label class="label-top" for="mail">Email:</label>
          <input class="last-text-input" id="mail" type="email" name="email" required><br>
        </p>
        
        <fieldset class="input-group leg-no-padding">
          <legend>
            <span>Хотите подписаться на самую модную рассылку спама?</span> 
          </legend>
          <span class="add-to-legend"><em>Выберите категории</em></span>
          <p>
            <input type="checkbox" name="spam-equipment" value="yes">
            <span class="text-after-iput">Оборудование</span> 
          </p>
          <p>
            <input type="checkbox" name="spam-cooking" value="yes">
            <span class="text-after-iput">Как приготовить обеды</span>
          </p>
          <p>
            <input type="checkbox" name="spam-millionaire" value="yes">
            <span class="text-after-iput">Заработай миллион за два дня!</span> 
          </p>
        </fieldset>
        
        <fieldset class="input-group">
          <legend>
            <span>На сколько сложная задача:</span>
          </legend>
          <p>
            <input type="radio" name="level_task" value="easily">
            <span class="text-after-iput">Совсем нет</span>
          </p>
          <p>
            <input type="radio" name="level_task" value="medium" checked>
            <span class="text-after-iput">Так себе</span>
          </p>
          <p>
            <input type="radio" name="level_task" value="hard"/>
            <span class="text-after-iput">Еле справились</span>
          </p>
        </fieldset>
      </fieldset>
      <div id="error-handler" class="error-handler"></div>
      <input type="submit" class="btn btn-success" value="Отправить">
    </form>
  </section>

  <?php
    require('views/template/footer.php');
  ?>
  
  