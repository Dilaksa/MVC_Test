<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav>

<div class="container-fluid">

    <div class="row">
        
       
        </div>
        <div class="col-12">
        <div class="col-2">
        </div>
        
        <h1 class="display-5 text-center border border-primary bordar-info mb-3">Bitte auswählen</h1>
        </div>
    </div>
</div>





<div class="form-row">
    <div class="form-group col-md-5">
        <label for "startingPoint"><h5>Start</h5></label>
        <select name ="startingPoint" id="startingPoint" class="form-control">
            <option val="" selected disabled> Billet ab</option>
            <option val="sg">St.Gallen</option>
            <option val="ab">Arbon</option>
            <option val="rh">Romanshorn</option>
            <option val="ff">Frauenfeld</option>
        </select>
    </div>

        <div class="form-group col-md-2">
            
        </div>
            <div class="form-group col-md-5">
            <label for "endPoint"><h5>Ziel</h5></label>
            <select name ="startingPoint" id="startingPoint" class="form-control">
                <option val="" selected disabled>Billet bis</option>
                <option val="sg">St.Gallen</option>
                <option val="ab">Arbon</option>
                <option val="rh">Romanshorn</option>
                <option val="ff">Frauenfeld</option>
            </select>
        </div>
        </div>


            <div class="form-group col-md-5">
            <form>
                <p><h5>Billettart:</h5></p>
                <fieldset>
                    <input type="radio" id="ef" name="Strecke" value="Einfache Fahrt">
                    <label for="ef"><h5> Einfache Fahrt</h5></label> <br>
                    <input type="radio" id="hz" name="Strecke" value="Hin und Zurück">
                    <label for="hz"><h5> Hin und Zurück</h5></label><br>
                    <input type="radio" id="mf" name="Strecke" value="Mehrfahrtenkarte">
                    <label for="mf"><h5> Mehrfahrtenkarte</h5></label> </br>
                </fieldset>
            </form>
        </div>

        <div class="col">
        <label>

        <a class="btn btn-primary btn-lg" onclick="location.href='http://localhost/MVC_Test/Public/home/passengers'" role="button">Weiter</a>
        </div>

        <div class="container-fluid">

    <div class="row">
        <div class="col-1">
         <button class=" btn btn-primary backBtn btn-lg pull-left" type="button" onclick="history.back(-1)"><i
                class="fa fa-arrow-left"></i></button>
        </div>
        <div class="col-2">
        </div>
        </div>
        <div>
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        <button type="button" class="btn btn-default btn-lg">
                 <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Stop
            </button>
            </div>
        
    </div>
</div>
        
    
</div>
    