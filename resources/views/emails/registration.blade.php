@component('mail::message')
# Bienvenue, {{ $user->name }}

Merci de vous être inscrit sur notre plateforme. <br/>
Il ne vous reste qu'à confirmer votre e-mail, veuillez cliquer sur
le bouton ci-dessous

@component('mail::button', ['url' => url("/register/confirmation/". $user->confirmation_token)])
Confirmer mon compte
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
