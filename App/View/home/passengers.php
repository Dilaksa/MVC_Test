<div class="container-fluid">

    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-2">
        </div>
        </div>
        <div class="col-6">
        
        </div>
    </div>
</div>
<div class="float-left col-md-5">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Ihre Wahl</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      
    </tr>
  </tbody>
</table>
</div>


<div class="float-right col-md-3">
<p>Klasse:</p>
<button type="button" class="btn btn-secondary btn-lg">1.Klasse</button>
<button type="button" class="btn btn-secondary btn-lg">2.Klasse</button>
</div>

<div class="float-right col-md-5">
        <form>
        
            <p>Kundengruppe:</p>
            <fieldset>
                <input type="radio" id="ew" name="Kundengruppe" value="Erwachsene ohne Halbtax">
                <label for="ew"> Erwachsene ohne Halbtax</label><br>
                <input type="radio" id="ht" name="Kundengruppe" value="Halbtax">
                <label for="ht"> Halbtax</label><br>
                <input type="radio" id="kd" name="Kundengruppe" value=" Kinder 6-16 Jahre">
                <label for="kd"> Kinder 6-16 Jahre</label></br>
            </fieldset>
        </form>
    </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for "passengers">anzahl Pers.</label>
                 <input type="number" value="1" min="1" max="20" step="1"/>
            </div>
        </div>

   
    </div>
    
    <div class="form-row">
        
        
        <button type="button" class="btn btn-danger"onclick="location.href='http://localhost/MVC_Test/Public/index.php'" role="button">STOP</button>
        <button class=" btn btn-primary backBtn btn-lg pull-left" type="button" onclick="history.back(-1)"><i
                class="fa fa-arrow-left"></i></button>
     </div>            
                
      
      
     <div class="align-self-end ml-auto">
            <a class="btn btn-primary btn-lg" onclick="location.href='http://localhost/MVC_Test/Public/home/prices'" role="button">Weiter</a>
    </div>
           

</div>

