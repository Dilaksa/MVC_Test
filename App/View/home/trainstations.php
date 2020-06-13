
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
    <form action="/MVC_Test/Public/home/passengers" method="POST">
    <div class="form-row">
        <div class="form-group col-md-1">

        </div>
        <div class="form-group col-md-4">
            <label for ="startingPoint">
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
            <label for ="endPoint">
                <h5>Ziel</h5>
            </label>
            <select name="endPoint" id="endPoint" class="form-control">
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
        
            <label for="default-picker"><h5>Datum:</h5></label>
            <input type="date" name="date" id="default-picker" class="form-control" placeholder="Select date">

        </div>

        <div class="float-left col-md-2">

            <label for="default-picker"><h5>Zeit:</h5></label>
            <input type="time" name="time" id="default-picker" class="form-control" placeholder="Select time">

        </div>

        <div class="float-right col-md-2">
        </div>
        <div class="float-right col-md-4">

            <p>
                <h5>Billetart:</h5>
            </p>
            <fieldset>
<?php
            $ticket = $data['ticket'];
           foreach ($ticket as $key => $value) :
               echo '<input type="radio" name="ticketType" id="ticketType'.$key.'" value="' . $key . '" />';
               echo '<label for="ticketType'.$key.'"><h5>&nbsp;' . $value . '</h5></label></br>';
           endforeach;
?>
            </fieldset>
            <div class="form-group col-md-1">

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
         <button type="button" class="btn btn-danger" onclick="location.href='http://localhost/MVC_Test/Public/index.php'" role="button"><h5>STOP</h5></button>
</div>
    </div>

    <div class="form-group col-md-10">
    </div>
    <div class="form-group col-md-1">
        
        <input class="btn btn-primary btn-lg" type="submit" role="button"></input>
    </div>
</div>
</form>