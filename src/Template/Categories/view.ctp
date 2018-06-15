<?php $this->assign('title', 'Tienda Inacap - ' . $category['name']) ?>
<div class="row">

  <div class="col-lg-3">

    <h1 class="my-4 d-none d-md-block">Categorías</h1>
    <div class="list-group">
      <?php foreach ($categories as $cat) {
        echo $this->Html->link(
          $cat['name'],
          ['_name' => 'category_view', 'id' => $cat['id'], 'slug' => $cat['slug']],
          ['class' => 'list-group-item']
        );
      }
      ?>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">
    <br/>
    <div class="row">
      <?php if(count($items) == 0) : ?>
        <p>No hay productos</p>
      <?php endif; ?>
      <?php foreach ($items as $item) : ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo $item['image'] ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $item['name']; ?></a>
              </h4>
              <h5>$<?php echo $item['price']; ?></h5>
              <p class="card-text"><?php echo $item['description'] ?></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->
