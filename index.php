<?php

function generateCombinations($attributes) {
    $result = [];
    
    function combine(array $attributes, int $index = 0, $current = [],array &$result) {
        if ($index == count($attributes)) {
            $result[] = $current;
            return;
        }
        
        foreach ($attributes[$index] as $value) {
            combine($attributes, $index + 1, array_merge($current, [$value]), $result);
        }
    }
    
    combine($attributes, 0, [], $result);
    
    return $result;
}


$shoeAttributes = [
    ['قرمز', 'آبی', 'سبز'],      
    ['نایک', 'ادیداس', 'پما'],   
    ['36', '37', '38', '41']           
];


$combinations = generateCombinations($shoeAttributes);


foreach ($combinations as $index => $combination) {

echo '<pre>';
    var_dump("$index =>  [$combination[0], $combination[1], $combination[2]]");
    
echo '</pre>';





}
?>
<table>

    

</table>