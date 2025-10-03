<h1>🧙‍♂️ Подготовка хоббитов к путешествию</h1>
<?php
$allHobbits = ["Салли","Поли","Том","Тэми","Джейксон","Томми","Финн","Фил","Гейтс","Джереми"];
$partySize = rand(2, 5);
shuffle($allHobbits);
$party = array_slice($allHobbits, 0, $partySize);
$names = implode(", ", $party);
$countParty = count($party);
$transport = ["машина","нет транспорта","самолет","вертолет"];
$transport = $transport[rand(0,3)];
$allSupplies = ["хлеб","колбаса","бананы","хумус","жареная рыба","каша","мясо"];
$supplies = $allSupplies[rand(0,6)];
$partyEvents = [
    "{hobbit} решил испечь пирог перед выходом.",
    "{hobbit} не смог найти свой плащ, пришлось искать всем вместе.",
    "{hobbit} потерял карту и пришлось искать ее по всему дому.",
    "{hobbit} помог собрать лишний мешок орехов, и это задержало выход.",
    "{hobbit} наоборот всех поторопил, и сборы пошли быстрее!",
];
$delayDays= count($allSupplies);
$partyCount= rand(1,3);
shuffle($partyEvents);
$events = array_slice($partyEvents, 0, $partyCount);
$eventsCount = count($events);
$delayDays= $delayDays + $eventsCount;

$nazgulDays = 5;
$nazguldelay = $nazgulDays - $nazguldelay

?> 

<div class='block'>
    В поход отправятся <?= $countParty?> хоббитов: <?= $names?><br>
</div>

<div class='block'> 
<?if ($transport === 'нет транспорта') {?>
    К сожалению, транспорта нет. Хоббитам придется идти пешком! 
    <?} else {?>
    Хоббиты нашли транспорт: <?=$transport?>
    <?}?>
</div>

<div class='block'> 
    Собрали припасы: <br> 
    <?foreach ($allSupplies as $supply) {
        echo("- $supply <br>");
    }?>
</div>

<div class='block'> 
    Случившиеся события: <br> 
    <?foreach ($events as $supply) { 
        $events = str_replace("hobbit", $party[array_rand($party)], $events);
        echo("- $supply <br>");
    }?>
</div>

</div>
</div class='block'>
    Сколько дней собирались хоббиты: <?= count($allSupplies)+count($events) ?>
</div>

</div>
<div class='block'>
    <?php
    if((count($allSupplies)+count($events))<$nazgulDays) {
    ?>✨ Хоббиты успели выйти в путь раньше назгулов!<?
}
elseif((count($allSupplies)+count($events))==$nazgulDays){
    ?>✨ Хоббиты успели от назгулов в самый последний момент<?
}
else{
    ?>⚔️ Назгулы настигли хоббитов! Хоббиты слишком долго собирались и опаздали на опоздали на столько дней: <? count($allSupplies)+count($events)-$nazgulDays?><?
    }
    ?>
</div> 