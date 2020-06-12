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
    <div class="form-group col-md-4">
        <label for "Start">
            <h5>Start</h5>
        </label>
        <select name="startingPoint" id="startingPoint" class="form-control">
            <option val="" selected disabled> Billet ab</option>
            <?php
            $trainstations = $data['trainstations'];
            foreach ($trainstations as $key => $value) :
                echo '<option value="' . $key . '">' . $value . '</option>';
            endforeach;
            ?>
        </select>
    </div>
    <div class="form-group col-md-2">

    </div>
   
    <div class="form-group col-md-4">
        <label for "Ziel">
            <h5>Ziel</h5>
        </label>
        <select name="startingPoint" id="startingPoint" class="form-control">
            <option val="" selected disabled>Billet bis</option>
            <?php
            $trainstations = $data['trainstations'];
            foreach ($trainstations as $key => $value) :
                echo '<option value="' . $key . '">' . $value . '</option>';
            endforeach;
            ?>
        </select>
    </div> 
    <div class="form-group col-md-1">

    </div>
    
</div>


<div class="form-row">
<div class="form-group col-md-1">

</div>
    <div class="float-left col-md-2">

        <label for="default-picker">Datum:</label>
        <input type="date" id="default-picker" class="form-control" placeholder="Select date">

    </div>

    <div class="float-left col-md-2">

        <label for="default-picker">Zeit:</label>
        <input type="time" id="default-picker" class="form-control" placeholder="Select time">

    </div>

        <div class="float-right col-md-2">
        </div>
        <div class="float-right col-md-4">
        <form>

            <p>
                <h5>Billettart:</h5>
            </p>
            <fieldset>
                <input type="radio" id="ef" name="Strecke" value="Einfache Fahrt">
                <label for="ef">
                    <h5> Einfache Fahrt</h5>
                    
                </label> <br>
                <input type="radio" id="hz" name="Strecke" value="Hin und Zurück">
                <label for="hz">
                    <h5> Hin und Zurück</h5>
                </label><br>
                <input type="radio" id="mf" name="Strecke" value="Mehrfahrtenkarte">
                <label for="mf">
                    <h5> Mehrfahrtenkarte</h5>
                </label> </br>
            </fieldset>
        </form>
        <div class="form-group col-md-1">

</div>
    
</div>

