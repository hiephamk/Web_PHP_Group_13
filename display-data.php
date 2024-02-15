<?php

        if(!empty($filterDataByCategory)) {
        ?>
            <div class="body-page container d-inline-block justify-content-center">
            <table border="1" cellspacing="0" cellpadding="5">
            <tr style = "border: 1px solid black; border-radius: 10px;">
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Created in</th>
                <th>Details</th>
            </tr>
        <?php
            foreach($filterDataByCategory as $filterData){
            $sn = 1;
        ?>
        <tr>
            <td><?php echo "<span class='badge bg-danger px-2 py-1 shadow-1-strong mb-3'>".$filterData['title']?></td>
            <td><?php echo "<p class='text-muted'>".$filterData['news_desc']?></td>
            <td><?php echo "<img class = 'img-fluid' style='width: 70%; height: 50%' src=".$filterData['image'].">"?></td>
            <td><?php echo $filterData['create_date'];  ?></td>
            <td><?php echo "<a class='btn btn-primary' href='Article.php' role='button'> Read more </a>"; ?></td>
        </tr>
        <?php
        $sn++; }
        ?>
            </table>
            </div>
        <?php
        }
 ?>