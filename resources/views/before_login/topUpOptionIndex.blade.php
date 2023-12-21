@extends ('/before_login.components.topUpTemplateIndex')

@section('formIndex')

    <div class="row g-1">
        <div class="col-md-6">
            <div class="form-floating">
                <input
                    type="text"
                    class="form-control @error('game_id1') is-invalid @enderror"
                    id="game_id1"
                    name="game_id1"
                    placeholder="Masukkan User ID"/>
                <label for="game_id1">Masukkan User ID</label>
                @error('game_id1')
                    <div class="invalid-feedback">
                        Tolong masukkan user id
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <select class="form-select form-select-lg mb-3 @error('SERVER') is-invalid @enderror" aria-label="form-select-lg example" style="height: 57.5px;" id="SERVER" name="SERVER">
                <option value="America">America</option>
                <option value="Europe">Europe</option>
                <option value="Asia">Asia</option>
            </select>
            @error('SERVER')
                <div class="invalid-feedback">
                    Tolong masukkan server
                </div>
            @enderror
        </div>
    </div>


@endsection


