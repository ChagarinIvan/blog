@extends('layouts.app')

@section('title', __('app.navbar.faq'))

@section('content')
    <h3>{{ __('app.navbar.faq') }}</h3>
    <h5>Описание работы</h5>
    <ul>
        <li>Создаем соревноване</li>
        <li>Добавляем дни соренований с протоколами (берем с orient.by)</li>
        <li>Протокол в виде набора строк (номер, Фамилия, Имя, результат, место..) сохраняется в базу</li>
        <li>В начале каждого часа запускается процесс СООТНЕСЕНИЯ всех ранее не "определенных" спортсменов с добавленными спортсменами (страница Члены Федерации)</li>
        <li>В результате СООТНЕСЕНИЯ некоторые спортсмены могут не определится, хотя в базе спартсменов они есть (например если в протоколе фамилия на другом языке, или произошла смена фамилии), тогда есть возможность в протоколе рядом с фамилией спортсмена нажать кнопку "add" и выбрать действительного спортсмена. Данный "кейс" будет также сохранен и будет учитыватся при всех последующих СООТНЕСЕНИЯХ</li>
        <li>Таке же есть возможность отредактировать неправильное СООТНЕСЕНИЕ</li>
        <li>К полученному дню соревнований, нужно прикрепить соответствующие метки (метки типа соревнований, типа дистанции, метки кубков и т.д), что необходимо для аггрегации соревнований для получения статистики по определенному признаку</li>
        <li>Данные можно выгрузить по <a href="/faq/api"><u>API</u></a></li>
    </ul>

    <h5>План разработки:</h5>
    <ol>
        <li>Самая главная работа по добавлению новых и старых протоколов и доработке ПАРСЕРОВ под них.</li>
        <li>Проверка работы ИДЕНТИФИКАТОРА (привязка сторок протоколов к реальным людям), и его доработка.</li>
        <li>Дорабатываю пользовательский интерфейс для удобства просмотра инфы по сревнованиям, людям, клубам.</li>
        <li>Добавить форму обратной связи.</li>
        <li>Добавить ЭКСПОРТЫ из страниц протоколов в форматах csv и xlsx.</li>
    </ol>
@endsection