@extends ('/after_login.components.topUpTemplate')

@section('form')

        <div class="row g-1">
            <div class="col-md-6">
                <div class="form-floating">
                    <input
                    type="text"
                    class="form-control"
                    id="game_id1"
                    name="game_id1"
                    placeholder="Masukkan User ID"/>
                    <label for="game_id1">Masukkan User ID</label>
                </div>
            </div>
            <div class="col-md-6">
                <select class="form-select form-select-lg mb-3" aria-label="form-select-lg example" style="height: 57.5px;" id="SERVER" name="SERVER">
                    <option selected>Pilih Server:</option>
                    <option value="America">America</option>
                    <option value="Europe">Europe</option>
                    <option value="Asia">Asia</option>
                </select>
            </div>
        </div>

@endsection


