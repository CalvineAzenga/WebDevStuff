<div class="modal fade details-1" id="a<?=$product['id']; ?>" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" name="button" data-dismiss="modal" aria-label="Close" class="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center"><?=$product['title']; ?></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-block">
                <img style="width:500px;height:300px;" src="<?=$product['image']; ?>" alt="<?=$product['title']; ?>" class="details img-responsive">
              </div>
            </div>
            <div class="col=sm-6">
              <h4>Details</h4>
              <p><?=$product['description']; ?></p>
              <br />
              <p class="list-price text-danger">List Price: <s><?=$product['listprice']; ?></s></p>
              <p>Price: <?=$product['price']; ?></p>
              <p>Brand: <?=$product['brand']; ?></p>
              <form class="add_cart.php" action="index.html" method="post">
                <div class="form-group">
                  <div class="col-xs-3">
                    <label for="quantity" id="quantity-label">Quantity:</label>
                    <input type="text"  style="width:200px;" name="quantity" value="" class="form-control" id="quantity">
                  </div><br /><br /><br />
                  <div class="form-group">
                    <label for="size">Size:</label>
                    <select class="form-control" name="size" id="size" style="width:200px;">
                      <option value=""></option>
                      <option value="28">28</option>
                      <option value="32">32</option>
                      <option value="36">36</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" name="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="button" class="btn btn-warning"> <span class="glyphicon glyphicon-shopping-cart"></span>Buy Project</button>
      </div>
    </div>
  </div>
</div>
