@extends ('/after_login.components.topUpTemplate')

@section('form')

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
            <div class="form-floating">
                <input
                    type="text"
                    class="form-control @error('SERVER') is-invalid @enderror"
                    id="SERVER"
                    name="SERVER"
                    placeholder="Masukkan Server"/>
                <label for="SERVER">Masukkan Server</label>
                @error('SERVER')
                    <div class="invalid-feedback">
                        Tolong masukkan server
                    </div>
                @enderror
            </div>
        </div>
    </div>


@endsection


