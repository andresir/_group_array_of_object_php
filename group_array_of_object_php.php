<?php 

$data = array(
    array(
        "id" => 1,
        "name" => "Bruce Wayne",
        "city" => "Gotham",
        "gender" => "Male"
    ),
    array(
        "id" => 2,
        "name" => "Thomas Wayne",
        "city" => "Gotham",
        "gender" => "Male"
    ),
    array(
        "id" => 3,
        "name" => "Diana Prince",
        "city" => "New Mexico",
        "gender" => "Female"
    ),
    array(
        "id" => 4,
        "name" => "Speedy Gonzales",
        "city" => "New Mexico",
        "gender" => "Male"
    )
);

// Group data by the "gender" key 
$byGroup = group_by("gender", $data);

// Dump result
echo "<pre>" . var_export($byGroup, true) . "</pre>";

function group_by($key, $data) {
    $result = array();

    foreach($data as $val) {
        if(array_key_exists($key, $val)){
            $result[$val[$key]][] = $val;
        }else{
            $result[""][] = $val;
        }
    }

    return $result;
}

// Output ================================
// array (
//     'Gotham' => 
//         array (
//         0 => 
//         array (
//             'id' => 1,
//             'name' => 'Bruce Wayne',
//             'city' => 'Gotham',
//             'gender' => 'Male',
//         ),
//         1 => 
//         array (
//             'id' => 2,
//             'name' => 'Thomas Wayne',
//             'city' => 'Gotham',
//             'gender' => 'Male',
//         ),
//     ),
//     'New Mexico' => 
//         array (
//         0 => 
//         array (
//             'id' => 3,
//             'name' => 'Diana Prince',
//             'city' => 'New Mexico',
//             'gender' => 'Female',
//         ),
//         1 => 
//         array (
//             'id' => 4,
//             'name' => 'Speedy Gonzales',
//             'city' => 'New Mexico',
//             'gender' => 'Male',
//         ),
//     ),
// )
