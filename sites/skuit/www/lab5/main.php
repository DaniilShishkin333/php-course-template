<?
$names = [
"Альдар","Берен","Келеборн","Теодред","Эомер","Фарамир","Денетор","Халдир","Глорфиндел","Трандуил",
"Эльдан","Маблон","Брандор","Аранель","Лотарион","Мелькор","Ангмар","Саэрон","Эарендил","Эльрос",
"Аделина","Мириэль","Идунн","Лиана","Элениэль","Лютиэн","Галадриэль","Арвен","Нимродэль","Видария",
"Сильмариэн","Элендис","Альвина","Рианна","Финдуилас","Эстелла","Морвен","Эрисель","Йованна","Мирандиль",
"Боромир","Турин","Финрод","Маэглин","Ородрет","Телион","Ангрон","Дориан","Феанор","Эндар",
"Ангвин","Себальд","Эмильдор","Варгельд","Тарвин","Эларион","Ругвир","Дагор","Мельда","Эофрид",
"Годфри","Гильом","Ричард","Генри","Эдмунд","Родерик","Конрад","Альфред","Эрнст","Гуго",
"Вильгельм","Томас","Оуэн","Филипп","Стефан","Леонард","Роберт","Джон","Артур","Мэтью",
"Агата","Флоренс","Маргарет","Эдит","Сибилла","Катарина","Эльфрида","Изольда","Беатриса","Розалинда",
"Сесиль","Джулиана","Матильда","Элеонора","Клементина","Фелиция","Валентина","Амелия","Гертруда","Хелена"
];
$genders = ["мужчина", "женщина"];
$villagers = [];
$villagerCount = rand(2, 100);
for ($i = 0; $i < $villagerCount; $i++) {
    $villagers[] = [
        "name" => $names[array_rand($names)] . " " . ($i + 1),
        "age" => rand(12, 60),
        "gender" => $genders[array_rand($genders)],
        "hp" => rand(10, 15),
        "strength" => rand(3, 5),
        "intelligence" => rand(3, 5),
    ];
}
$conscripts = [];
foreach ($villagers as $villager) {
    if ($villager["gender"] ==  "мужчина" && $villager["age"] > 18) {
        $conscripts[] = $villager;
    }
}
$weapons = [
["name" => "Лук", "bonus" => ["strength" => 2, "intelligence" => 1, "hp" => 0], "class" => "ranged"],
["name" => "Праща", "bonus" => ["strength" => 1, "intelligence" => 0, "hp" => 0], "class" => "ranged"],
["name" => "Меч", "bonus" => ["strength" => 3, "intelligence" => 0, "hp" => 0], "class" => "melee"],
["name" => "Копье", "bonus" => ["strength" => 2, "intelligence" => 0, "hp" => 1], "class" => "melee"],
["name" => "Щит", "bonus" => ["strength" => 0, "intelligence" => 0, "hp" => 3], "class" => "melee"],
["name" => "Силки и ловушки", "bonus" => ["strength" => 0, "intelligence" => 5, "hp" => 0], "class" => "scout"],
];
$militia = [];
for ($i = 0; $i < count($conscripts); $i++) {
    $soldier = $conscripts[$i];
    $weapon = $weapons[array_rand($weapons)];
    $soldier["weaponsName"] = $weapon["name"];
    $soldier["weaponsClass"] = $weapon["class"];
    $soldier["hp"] += $weapon["hp"];
    $soldier["strength"] += $weapon["strength"];
    $soldier["intelligence"] += $weapon["intelligence"];
    $militia[] = $soldier;
}
?>

<h2>1) Все жители деревни (<?= count($villagers) ?>)</h2>
<table class="table">
    <tr><th>Имя</th><th>Пол</th><th>Возраст</th><th>HP</th><th>Сила</th><th>Интеллект</th><th>
    <?php foreach ($villagers as $hobbit) { ?>
        <tr>
                <td><?= $hobbit["name"] ?></td>
                <td><?= $hobbit["gender"] ?></td>
                <td><?= $hobbit["age"] ?></td>
                <td><?= $hobbit["hp"] ?></td>
                <td><?= $hobbit["strength"] ?></td>
                <td><?= $hobbit["intelligence"] ?></td>
        <tr>
    <?php } ?>
</table>

<h2>2) Призванные мужчины (>18) - ополчение (<?= count($militia) ?>)</h2>
<table class="table">
    <tr><th>Имя</th><th>Возраст</th><th>HP</th><th>Сила</th><th>Интеллект</th><th>Оружие</th></tr>
    <?php foreach ($militia as $m) { ?>
        <tr>
            <td><?=$m["name"] ?></td>
            <td><?=$m["age"] ?></td>
            <td><?=$m["hp"] ?></td>
            <td><?=$m["strength"] ?></td>
            <td><?=$m["intelligence"] ?></td>
            <td><?=$m["weaponName"] ?></td>
        </tr>
    <?php } ?>