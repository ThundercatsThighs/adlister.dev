<!--Page that includes the form to edit an existing ad-->
<?php 

echo "edit page";

 ?>


 <div class="row">
    <form method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s6 offset-s3">
          <input id="item_name" type="text" class="validate">
          <label for="item_name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 offset-s3">
          <input id="price" type="text" class="validate">
          <label for="price">Price</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 offset-s3">
          <textarea id="description" class="materialize-textarea"></textarea>
          <label for="description">Description</label>
        </div>
      </div>
      <div class="row">
          <input class="btn waves-effect waves-light col s2 offset-s5" type="submit" value="Update">
      </div>
    </form>
  </div>
        