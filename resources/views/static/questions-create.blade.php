@extends("layouts.app")

@section("content")
    <div class="container mt-4 pb-4">
        <div class="col-md-12 col-lg-8 mx-auto">
            <div class="bg-white shadow-md p-4 row">
                <div class="col-12">
                    <h1 class="question__title mb-0">Poser une question</h1>
                    <span style="color:#5b6987;">
                        Vous rencontrez des problèmes? Notre communauté de développeurs est là pour vous aider!
                    </span>
                </div>
                <form action="" method="POST" class="col-12 row">
                    @csrf

                    <div class="col-12 form-group mt-4">
                        <label for="title" class="questions__form-label">Titre de la question</label>
                        <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                       
                        
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="col-12 form-group">
                        <label for="content" class="questions__form-label">Contenu de la question</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror" >{{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            
                            @enderror
                    </div>

                    <div class="col-12 form-group">
                        <label for="content" class="questions__form-label">Technologies / Categories</label>
                        <input type="text" class="input-tag is-invalid" name="tags" id="content" value="{{ old('tags') }}">
                        @error('tags')
                            <span class="invalid-feedback" role="alert">
                                <strong>Veuillez choisir une catégorie svp </strong>
                            </span>
                            
                            @enderror
                    </div>

                    <div class="col-12 form-group">
                        <button type="submit" class="btn btn-primary d-block shadow-md w-100 btn-lg">
                            Poser ma question <i class="la la-arrow-right"></i>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection
