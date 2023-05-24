<form action="index.php" method="GET" class="">

    <div>
        la lunghezza della password massima è:
    </div>

    <div class="row">
        <div class="col-6 d-flex flex-column gap-3">
            <label class="from-label" for="">Lunghezza password</label>
            <label class="from-label" for="">Consentire la ripetizione</label>
            <label class="from-label" for="">Consentire solo:</label>
        </div>
        <div class="col-6 d-flex flex-column gap-3">

            <div>
                <input type="text" palceholder="quanti caratteri vuoi" name="lunghezzaCaratteri">
            </div>

            <div>
                <div class="form-check">
                    <input value="si" class="form-check-input" type="radio" name="radioValue" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input value="no" class="form-check-input" type="radio" name="radioValue" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                </div>
            </div>

            <div>
                <div class="form-check">
                    <input name="checkboxLettere" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Lettere 
                    </label>
                </div>
                <div class="form-check">
                    <input name="checkboxNumeri" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                    Numeri
                    </label>
                </div>
                <div class="form-check">
                    <input name="checkboxSimboli" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                    Simboli
                    </label>
                </div>
            </div>

        </div>

    </div>

    <button type="submit" class="btn btn-primary">Generazione password</button>
    <button type="reset" class="btn btn-secondary">Annulla</button>

</form>