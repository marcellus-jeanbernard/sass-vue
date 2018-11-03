
@component('mail::message')
# Bienvenue sur Notre Software Saas Service, {{ $user->name }}

Ce Systeme vous permettra de changer votre horizon sur le plan technologique.
Ce Systeme vous permettra de changer votre horizon sur le plan technologique.
Ce Systeme vous permettra de changer votre horizon sur le plan technologique.
Ce Systeme vous permettra de changer votre horizon sur le plan technologique.
Ce Systeme vous permettra de changer votre horizon sur le plan technologique.
Ce Systeme vous permettra de changer votre horizon sur le plan technologique.
Ce Systeme vous permettra de changer votre horizon sur le plan technologique.


@component('mail::button', ['url' => ''])
cliker sur le lien pour access a votre email !
@endcomponent

Merci Beaucoup,<br>
{{ config('app.name') }}
@endcomponent


