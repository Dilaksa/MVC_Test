

<div class="container-fluid">

    <div class="row">
        <div class="col-1">
         <button class=" btn btn-primary backBtn btn-lg pull-left" type="button" onclick="history.back(-1)"><i
                class="fa fa-arrow-left"></i></button>
        </div>
        <div class="col-2">
        </div>
        </div>
        <div class="col-6">
        <h1 class="display-5 text-center border border-primary bordar-info mb-3">Ihre Fahrt</h1>
        </div>
    </div>
</div>



<div class="form-row">
    <div class="form-group col-md-5">
        <label for "startingPoint">Start</label>
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
            <label for "endPoint">Ziel</label>
            <select name ="startingPoint" id="startingPoint" class="form-control">
                <option val="" selected disabled>Reiseziel</option>
                <option val="sg">St.Gallen</option>
                <option val="ab">Arbon</option>
                <option val="rh">Romanshorn</option>
                <option val="ff">Frauenfeld</option>
            </select>
        </div>
        <div class="row">
        <div class="form.group col">
        <label for="exampleInputEmail">Gültig ab: Datum</label>
        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
        placeholer="Date">
        <small id="emailHelp" class="form-text text-muted">Datwpicker..</small>
        </div>

        <div class="form-group col-md-5">
        <form>
            <p>Wählen Sie aus:</p>
            <fieldset>
                <input type="radio" id="mc" name="Zahlmethode" value="Einfache Fahrt">
                <label for="ef"> Einfache Fahrt</label> <br>
                <input type="radio" id="vi" name="Zahlmethode" value="Hin und Zurück">
                <label for="hz"> Hin und Zurück</label><br>
                <input type="radio" id="ae" name="Zahlmethode" value="Mehrfahrtenkarte">
                <label for="mk"> Mehrfahrtenkarte</label> </br>
            </fieldset>
        </form>
        </div>

        <div class="col">
        <label>

        <a class="btn btn-primary btn-lg" onclick="location.href='http://localhost/MVC_Test/Public/home/passengers'" role="button">Next</a>
        </div>
    
</div>
    
