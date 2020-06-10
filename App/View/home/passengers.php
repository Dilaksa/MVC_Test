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
        
        </div>
    </div>
</div>

    <div class="form-row">
        <div class="form-group col-md-5">
            <label for "passengers">anzahl Pers.</label>
            <select name ="startingPoint" id="startingPoint" class="form-control">
                <option val="" selected disabled>Anzahl</option>
                <option val="n1">1</option>
                <option val="n2">2</option>
                <option val="n3">3</option>
                <option val="n4">4</option>
                <option val="n4">5</option>
                <option val="n4">6</option>
                <option val="n4">7</option>
                <option val="n4">8</option>
                <option val="n4">9</option>
            </select>
        </div>
    </div>

    <div class="form-group col-md-5">
        <form>
        
            <p>Kundengruppe:</p>
            <fieldset>
                <input type="radio" id="ew" name="Kundengruppe" value="Erwachsene ohne Halbtax">
                <label for="ew"> Erwachsene ohne Halbtax</label> <br>
                <input type="radio" id="ht" name="Kundengruppe" value="Halbtax">
                <label for="ht"> Halbtax</label><br>
                <input type="radio" id="kd" name="Kundengruppe" value=" Kinder 6-16 Jahre">
                <label for="kd"> Kinder 6-16 Jahre</label> </br>
            </fieldset>
        </form>
    </div>
    <div class="col">
        <label>

        <a class="btn btn-primary btn-lg" onclick="location.href='http://localhost/MVC_Test/Public/home/prices'" role="button">Weiter</a>
        </div>

    <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
    </div>
</div>

