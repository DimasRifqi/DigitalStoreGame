@extends('logged.topupGI')

@section('from')
<form action="">
    <div class="row g-1">
        <div class="col-md-6">
          <div class="form-floating">
            <input
              type="text"
              class="form-control"
              id="name"
              placeholder="Masukkan User ID"/>
            <label for="name">Masukkan User ID</label>
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-floating">
            <input
              type="text"
              class="form-control"
              id="name"
              placeholder="Masukkan Server"/>
            <label for="name">Masukkan Server</label>
          </div>
          <select class="form-select form-select-lg mb-3" aria-label="form-select-lg example" style="height: 57.5px;">
            <option selected>Choose Server:</option>
            <option value="1">USA</option>
            <option value="2">Europe</option>
            <option value="3">Asia</option>
          </select>
        </div>
      </div>
</form>

@endsection
