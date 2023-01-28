<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="d-flex min-vh-100 min-vw-100">

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('image/contact.jpg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Formulaire de contact</h5>



                        <form method="POST" action="{{ route('contact.store')}}">
                            @csrf

                            <div class="mb-3 form-group">
                                <label for="nom" class="form-label">Nom Complet <span
                                        class="text-danger">*</span></label>
                                <input type="nom" value="{{ old('nom') }}" autofocus
                                    class="form-control @error('nom') is-invalid @enderror" id="nom"
                                    placeholder="ex: Brindou Gnépa junior">
                            </div>
                            @error('nom')
                            <span class="text-danger" style="margin-top: -1.25rem;display: block; font-size:80%"
                                role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror



                            <div class="mb-3 form-group">
                                <label for="objet" class="form-label">Objet <span class="text-danger">*</span></label>
                                <input type="objet" value="{{ old('objet') }}"
                                    class="form-control @error('objet') is-invalid @enderror" id="objet"
                                    placeholder="ex: Demande d'autorisation">
                            </div>
                            @error('objet')
                            <span class="text-danger" style="margin-top: -1.25rem;display: block; font-size:80%"
                                role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror




                            <div class="mb-3 form-control">
                                <label for="message" class="form-label">Corps du message <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control @error('message') is-invalid @enderror" name="message"
                                    rows="3" id="message" placeholder="Ecrivez ici..."></textarea>
                            </div>
                            @error('message')
                            <span class="text-danger" style="margin-top: -1.25rem;display: block; font-size:80%"
                                role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>




</body>

</html>