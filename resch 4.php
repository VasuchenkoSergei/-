От вася яковлев всем 07:15 PM
підкажіть як дз здавати я з html дз залив на гіт. про це десь треба інформувати скідати ссилку чі як?
От Sergey Teslenko всем 07:16 PM
под видео есть Перейти к домашке -> Plfnm ljvfire
Сдать домашку
От вася яковлев всем 07:17 PM
туда просто написати шоб перевірили?
От Sergey Teslenko всем 07:17 PM
туда ссылку с гита
От Дмитрий Крулькевич всем 07:17 PM
а репоз отдельный?
или ветка в репозе основном
От Sergey Teslenko всем 07:18 PM
можно ветку
я скинул main
так как не делал больше изменений
От вася яковлев всем 07:18 PM
в мене 2 веткі
От Sergey Teslenko всем 07:18 PM
я думаю без разницы
главное чтоб там дз было
От Дмитрий Крулькевич всем 07:19 PM
ага)
От Valeriy Shnurovoy всем 07:33 PM

$arr = [
        1,
        2,
        [
            3,
            4,
            5,
            [
                1,
                2,
            ],
        ],
        3,
    ];
    
function arrayParse(array $arr, int $exteriorKey): array
{
    $result = [];
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, arrayParse($value, $exteriorKey));
        } else {
            if ($key === $exteriorKey) {
                $result[] = $value;
            }
        }
    }
    return $result;
}

var_dump(arrayParse($arr, 1));
