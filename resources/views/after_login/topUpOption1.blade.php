@extends ('/after_login.components.topUpTemplate')

@section('form')
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
            {{-- <input
              type="text"
              class="form-control"
              id="name"
              placeholder="Masukkan Server"/>
            <label for="name">Masukkan Server</label> --}}
          </div>
          <select class="form-select form-select-lg mb-3" aria-label="form-select-lg example" style="height: 57.5px;">
            <option selected>Pilih Server :</option>
            <option value="1">Asia Pacific</option>
            <option value="2">Eureope</option>
            <option value="3">North America</option>
            <option value="4">South America</option>
            <option value="5">Southeash Asia</option>
          </select>
        </div>
      </div>
</form>
@endsection


