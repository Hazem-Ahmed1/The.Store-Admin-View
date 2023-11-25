<?php
require_once __DIR__ ."../../Models/DBManager.php";

# how to use the DBManager
$db = DBManager::getInstance();

# retreive your data 
# categories for example
$cats = $db ->select("Select * From Categories");

// Display the results in an HTML table
echo '<table>';
echo '<tr><th>Category ID</th><th>Category Name</th><th>Image URL</th></tr>';
foreach ($cats as $cat) {
    echo '<tr>';
    echo '<td>'.($cat['categoryID']) .'</td>';
    echo '<td>'.($cat['categoryName']) .'</td>';
    echo '<td><img src="' . $cat['imgURL'] . '" alt="Category Image"></td>';
    echo '</tr>';
}
echo '</table>';

// test the insert 
// tables name start with a Capital letter somehow it case sensitive here 
// $colsValuesToInsert = array(
//     "promocode"=>"happy2024",
//     "discount"=> 10.00
// );
// $db->insert('Promocode',$colsValuesToInsert);

// test the delete
// $db->delete('Promocode',"happy2023");

//test update
// $colsValuesToUpdate = array(
//     "promocode"=>"happy2023",
//     "discount"=> 20.00
// );
// $db->update('Promocode', "happy2024" ,$colsValuesToUpdate);

// test apply_function_to_column
$users_count = $db->apply_function_to_column('COUNT','Users', "userName");
echo '<h1>Total accounts :'.$users_count. '</h1>';

$admin_count = $db->apply_function_to_column('COUNT','Users', "userName", "role", "admin");
echo '<h1>Admin Users :'.$admin_count. '</h1>';

$cust_count = $db->apply_function_to_column('COUNT','Users', "userName", "role", "customer");
echo '<h1>Customer Users :'.$cust_count. '</h1>';
?>

 