@extends('layouts.app')

@section('title', 'Zoom Film')

@section('contenu')

    <div class="container-fluid w-50" style="margin-top: 100px;">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form method="post" action="{{ route('personnes.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom de l'acteur</label>
                        <input type="text" class="form-control" id="nom" placeholder="Nom de l'acteur"
                            name="nom">
                    </div>


                    <div class="form-group">
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" class="form-control" id="date_naissance" placeholder="Date de naissance"
                            name="date_naissance">
                    </div>

                    <div class="form-group">
                        <label for="sexe">Sexe</label>
                        <input type="text" class="form-control" id="sexe" placeholder="sexe" name="sexe">
                    </div>


                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="text" class="form-control" id="photo" placeholder="Photo" name="photo">
                    </div>

                    <div class="form-group">
                        <label for="role_principal">Role principal</label>
                        <input type="text" class="form-control" id="role_principal" placeholder="Role principal"
                            name="role_principal">
                    </div>

                    <div class="form-group">
                        <label for="biographie">biographie</label>
                        <input type="text" class="form-control" id="biographie" placeholder="biographie"
                            name="biographie">
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('22a169834d37acbe7264', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('popup-channel');
        channel.bind('personne-add', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
@endsection
