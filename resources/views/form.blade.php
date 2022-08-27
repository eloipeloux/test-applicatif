<form method="POST" class="form-group">
    @csrf
    <div class="form-group">
        <label for="blue_houses" class="col-sm-5 col-form-label">Number of Blue Houses</label>
        <div class="col-sm-5">
            <input type="number" class="form-control" name="blue_houses" id="blue_houses"
                value="@if(isset($nbBlueHouses)){{$nbBlueHouses}}@endif">
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="green_houses" class="col-sm-5 col-form-label">Number of Green Houses</label>
        <div class="col-sm-5">
            <input type="number" class="form-control" name="green_houses" id="green_houses"
                value="@if(isset($nbGreenHouses)){{$nbGreenHouses}}@endif">
        </div>
    </div>
    <button class="btn btn-primary mt-3">Submit</button>
</form>