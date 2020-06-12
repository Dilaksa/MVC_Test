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
        
        <button class="btn btn-primary btn-lg" onclick="location.href='http://localhost/MVC_Test/Public/home/<?php echo $data['next']; ?>'" role="button"><h5>Weiter</h5></button>
    </div>
</div>