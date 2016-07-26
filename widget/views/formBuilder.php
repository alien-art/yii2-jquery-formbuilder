<?php

use alien\jquery_formbuilder\assets\JqueryformBuilderAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
JqueryformBuilderAsset::register($this);
?>

    <div id="fb-main">
    </div>
<?php
$js_form_builder = <<<JS
  jQuery(document).ready(function($) {
    'use strict';
    var options = { 
    defaultFields: [$attributes],
    disableFields: [
      'autocomplete',
      'button',
      'date',
      'file',
      'header',
      'hidden',
      'paragraph'
    ],
    controlOrder: [
        'text',
        'textarea',
        'number',
        'select',
        'checkbox',
        'checkbox-group',
        'radio-group'
      ],
    messages: { 
        addOption : 'Добавить опцию',
        allFieldsRemoved : 'Все поля удалены',
        allowSelect : 'Позволить выбор',
        autocomplete : 'Автозаполнение',
        button : 'Кнопка',
        cannotBeEmpty : 'Данное поле не может быть пустым',
        checkboxGroup : 'Группа Чекбоксов',
        checkbox : 'Чекбокс',
        checkboxes : 'Чекбоксы',
        class : 'Класс',
        clearAllMessage : 'Вы уверены, что хотите очистить все поля?',
        clearAll : 'Очистить',
        close : 'Закрыть',
        content : 'Содержимое',
        copy : 'Копировать в буфер',
        dateField : 'Поле Дата',
        description : 'Текст Помощи',
        descriptionField : 'Описание',
        devMode : 'Режим отладки',
        editNames : 'Редактировать Имена',
        editorTitle : 'Элементы формы',
        editXML : 'Редактировать XML',
        fieldDeleteWarning: 'ложь',
        fieldVars : 'Переменные Поля',
        fieldNonEditable : 'Данное поле не является редактируемым',
        fieldRemoveWarning : 'Вы уверены, что хотите удалить данное поле?',
        fileUpload : 'Загрузка файла',
        formUpdated : 'Форма обновлена',
        getStarted : 'Перетащите поле из правой области в эту зону',
        header : 'Заголовок',
        hide : 'Редактировать',
        hidden : 'Скрытое поле ввода',
        label : 'Метка',
        labelEmpty : 'Метка поля не может быть пустой',
        limitRole : 'Ограниченный доступ к одной или нескольким из следующих ролей:',
        mandatory : 'Обязательно',
        maxlength : 'Максимальная длина',
        minOptionMessage : 'Данное поле требует указания хотя бы 2-х опций',
        name : 'Имя',
        no : 'Нет',
        off : 'Выкл.',
        on : 'Вкл.',
        option : 'Опция',
        optional : 'Опциональный',
        optionEmpty : 'Требуется значение опции',
        paragraph : 'Параграф',
        placeholder : 'Заглушка',
        placeholders: {
          value: 'Значение',
          label: 'Метка',
          text: 'Введите что-нибудь',
          textarea: 'Введите много текста',
          email: 'Введите Ваш EMAIL',
          placeholder: 'Заглушка',
          className: 'Имена классов, разделенные пробелами',
          password: 'Введите Ваш пароль'
        },
        preview : 'Предосмотр',
        radioGroup : 'Группа радио-контролов',
        radio : 'Радио-контрол',
        removeMessage : 'Удалить элемент',
        remove: '&#215;',
        required : 'Требуется',
        richText : 'Редактор текста',
        roles : 'Доступ',
        save : 'Сохранить',
        selectOptions : 'Опции',
        select : 'Выбрать',
        selectColor : 'Выбрать цвет',
        selectionsMessage : 'Множественный выбор включен',
        size : 'Размер',
        sizes: {
          xs: 'Очень маленький',
          sm: 'Маленький',
          m: 'По умолчанию',
          lg: 'Большой'
        },
        text : 'Текстовое поле',
        textArea : 'Поле текста',
        toggle : 'Переключатель',
        warning : 'Внимание!',
        viewXML: '&lt;/&gt;',
        yes: 'Да'
        }
    };  
 
    var formBuilder = $('#fb-main').formBuilder(options);
    
    $('.form-builder-save').click(function(e) {
    e.preventDefault();
    var formData = formBuilder.data('formBuilder').formData;
        $.ajax({
        type: "POST",
        url: "$url",
        data: "entitymodel=$entityModel&entityname=$entityName&form="+formData,
        success: function(msg){
          $.pjax.reload({container:'#from_attributes'});
          $('#from_attributes').focus();
        }
 });
  });
  });
JS;

$this->registerJs($js_form_builder, yii\web\View::POS_END, 'js_form_builder');
?>