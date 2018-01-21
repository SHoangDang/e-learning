    <div class="col-md-3 mt-4 ml-4">
          <ul class="nav flex-column">
          
            <li class="nav-item">
              <h2 class="font-weight-bold">Các chủ đề khác</h2>
            </li>
          <?php foreach ($category as $categories):?>
            <li class="nav-item">
              <a href="category/<?php echo $categories['category_slug']?>" class="nav-link"><?php echo $categories['category_name'];?></a>
            </li>
          <?php endforeach;?>
          </ul>
    </div>