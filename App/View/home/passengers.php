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
                <input type="radio" id="mc" name="Kundengruppe" value="Erwachsene ohne Halbtax">
                <label for="hte"> Erwachsene ohne Halbtax</label> <br>
                <input type="radio" id="vi" name="Kundengruppe" value="Halbtax">
                <label for="ht"> Halbtax</label><br>
                <input type="radio" id="ae" name="Kundengruppe" value=" Kinder 6-16 Jahre">
                <label for="kd"> Kinder 6-16 Jahre</label> </br>
            </fieldset>
        </form>
        </div>