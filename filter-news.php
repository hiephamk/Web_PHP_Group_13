<?php
include '/Database/db.php';
include 'filter-data.php';
include 'get-category.php';
?>
<div class="body-page container d-inline-block justify-content-center">
    <form method="post">
    <select name="filterByCategory">
        <?php
          $getCategories = getCategory();
          foreach($getCategories as $category) {
        ?>
        <option value="<?php echo $category['category_name']; ?>" 
        <?php echo $_POST['filterByCategory']==$category['category_name']?'selected':''; ?>>
        <?php echo $category['category_name']; ?>
        </option>
      <?php } ?>
    </select>
    <input type="submit" name="filter">
    </form>
</div>
<?php
    include 'display-data.php';
?>