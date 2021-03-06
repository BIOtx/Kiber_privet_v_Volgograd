<?php

$a = 'В Минэнерго США уточнили, что доступ к 32 миллионам баррелей предоставят с декабря по апрель на четырех нефтехранилищах в Техасе и Луизиане, где находятся стратегические запасы. Резервы восстановят в 2022-2024 годах. Продажу дополнительных 18 миллионов баррелей нефти, которую ранее одобрил конгресс, ускорят.
Решение открыть доступ к своим резервам согласованно приняли еще несколько стран — крупных потребителей энергии, включая Китай, Индию, Японию, Южную Корею и Великобританию. В Белом доме отметили, что "за несколько недель с момента объявления о проведении консультаций цены на нефть снизились примерно на десять процентов".
Как заявили в Министерстве нефти и природного газа Индии, там высвободят из стратегических запасов пять миллионов баррелей. В свою очередь, в правительстве Японии рассказали о намерении "распечатать" такое количество нефти, которого хватит на несколько дней. В Корее не сообщили, сколько сырья выпустят из резервов, подтвердив планы согласовать объемы и время "с США и другими дружественными странами".
Агентство Bloomberg называет решение открыть доступ к резервам "беспрецедентным шагом", на который основные потребители нефти пошли после того как страны ОПЕК+ проигнорировали призывы США существенно увеличить поставки на мировой рынок. Байдена критикуют за стремительно дорожающее топливо, обновившее в США семилетние ценовые максимумы.
По состоянию на 16:20 мск стоимость январских фьючерсов на марку Brent растет на 0,23 процента, до 79,87 доллара за баррель. Январские контракты на WTI замедляют снижение, пытаясь перейти к росту. Они дешевеют на 0,3 процента, до 76,55 доллара за баррель.';

$link = 'https://ria.ru/20211123/neft-1760354269.html?rcmd_alg=slotter';

// обрезаем до 180
$text_cut =  substr($a, 0, 180);

// делим на слова
$text_arr = explode(' ', $text_cut);

// индекс последнего элемента в массиве
$last_index = count($text_arr) - 1;

// Левая часть
$left_part = array_slice($text_arr, 0, $last_index - 1);;
$left_part = implode(' ', $left_part);

// правая часть
$right_part = array_slice($text_arr, $last_index - 1);
$right_part = implode(' ', $right_part);

// Запись и вывод
$b = $left_part . ' <a href="' . $link . '">' . $right_part . "...";
echo $b;