<div class="container-fluid">
  <div class="form-group col-md-1">

  </div>
  <div class="row">


    <div class="form-group col-md-1">

    </div>
    <div class="form-group col-md-10">

      <style>
        h3 {
          background-color: #cc0000;
        }

        h3 {
          color: #cccccc;
        }
      </style>
      <h3 class="display-5 text-center border border-primary bordar-info mb-3">Bitte auswählen</h3>
    </div>
  </div>

</div>
</div>


<div class="form-row">
  <div class="form-group col-md-1">
  </div>

  <div class="col-md-4">

    <table class="table table-hover">
      <thead>
        <tr>
          <th>
            Ihre Auswahl
          </th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        <tr class="table-dark">
          <td ALIGN="Left"><?php echo $data['summary']; ?></td>
        </tr>

      </tbody>
    </table>

  </div>
  <div class="col-md-1">
  </div>

  <div class="col-md-4">

    <h5>Betrag bezahlen:</h5>

    <p>
    <table name="prices" id="price" class="form-control"> 
      <?php
            $prices = $data['prices'];
            foreach ($prices as $key => $value) :
              echo '<option value="' . $value . '">' . $value . '</option>';
            endforeach;
            ?>
    </table>
    </p>


  </div>
</div>






<div class="form-row">
  <div class="form-group col-md-1">


  </div>


  <button class=" btn btn-primary backBtn btn-lg pull-left" type="button" onclick="history.back(-1)">
    <i class="fa fa-arrow-left"></i></button>
  <button type="button" class="btn btn-danger" onclick="location.href='http://localhost/MVC_Test/Public/index.php'" role="button">
    <h5>STOP</h5>
  </button>







  <div class="form-group col-md-10">
  </div>
  <div class="form-group col-md-1">
<form action="">
<button type="button" class="btn btn-lg" onclick="location.href='http://localhost/MVC_Test/Public/index.php'" role="button">
<h5>Kaufen</h5>
</form>
</div>
</div>