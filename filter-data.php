<?php
if(isset($_POST['filter'])) {
    
    $filterDataByCategory = filterDataByCategory();
}
function filterDataByCategory() {
    $filterByCategory = $_POST['filterByCategory'];
    global $conn;
    
    $data =[];
    if(!empty($filterByCategory)){
    
        $query = "SELECT title, news_desc, image, create_date FROM News";
        $query .= " WHERE category_name = '$filterByCategory'";
     
        $result = $conn->query($query);
    
        if($result->num_rows > 0) {
          $data = $result->fetch_all(MYSQLI_ASSOC);;
        
        } 
   } 
   return $data;
}