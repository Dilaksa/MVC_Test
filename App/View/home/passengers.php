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
          color: #cccccc;
        }
      </style>
      <h3 class="display-5 text-center border border-primary bordar-info mb-3">Bitte auswählen</h3>
    </div>
  </div>

</div>
</div>

<form action="/MVC_Test/Public/home/prices" method="POST">

  <div class="form-row">
    <div class="form-group col-md-1">

    </div>

    <div class="col-md-2">
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
      <div class="row">
        <div class="col-md-6">
          <label for="number">
            <h5>Klass:</h5>
          </label>
          <select name="classType" id="class" class="form-control">
            <?php
            $class = $data['class'];
            foreach ($class as $key => $value) :
              echo '<option value="' . $value . '">' . $value . '</option>';
            endforeach;
            ?>
          </select>
        </div>


        <div class="col-md-6">
          <label for="number">
            <h5>Anzahl Billette:</h5>
          </label>
          <select name="number" id="number" class="form-control">
            <option val="" selected disabled>Bitte auswählen</option>
            <?php
            $number = $data['number'];
            foreach ($number as $key => $value) :
              echo '<option value="' . $value . '">' . $value . '</option>';
            endforeach;
            ?>
          </select>
        </div>
      </div>
      <div class="row">


        <div class="col-md-1"></div>
        <div class="form-row">
          <div class="col-md-12">

            <p>
              <h5>Kundengruppe:</h5>
            </p>
            <fieldset>
              <?php
              $client = $data['client'];
              foreach ($client as $key => $value) :
                echo '<input type="radio" name="clientType" id="clientType' . $key . '" value= "' . $value . '" />';
                echo '<label for="clientType' . $key . '"><h5>&nbsp;' . $value . '</h5></label></br>';
              endforeach;
              ?>
            </fieldset>

          </div>
        </div>
      </div>
    </div>



    <div class="container-fluid">

      <style>
        footer {
          background-color: black;
        }
      </style>

      <div class="form-row">
        <div class="form-group col-md-1">


        </div>


        <button class=" btn btn-primary backBtn btn-lg pull-left" type="button" onclick="history.back(-1)">
          <i class="fa fa-arrow-left"></i></button>
        <button type="button" class="btn btn-danger" onclick="location.href='http://localhost/MVC_Test/Public/index.php'" role="button">
          <h5>STOP</h5>
        </button>




      </div>
    </div>

    <div class="form-group col-md-10">
    </div>
    <div class="form-group col-md-1">

      <input class="btn btn-primary btn-lg" type="submit" role="button"></input>
    </div>

</form>