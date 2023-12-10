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
            </div>

@endsection


