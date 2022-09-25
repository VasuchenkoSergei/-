

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
