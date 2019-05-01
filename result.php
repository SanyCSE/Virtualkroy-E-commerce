 <?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `products` WHERE products(`product_name`, `product_desc`, `product_img_name`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `products`";
    $search_result = filterTable($query);
}
 // function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "1245", "virtualkroy");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
header ("location:result2.php");
?>

