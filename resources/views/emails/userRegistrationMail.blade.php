@component('mail::message')
# Hello {{ $name }} welcome to expattax.

Kindly see below for your deffault password.

@component('mail::button', ['url' => ''])
{{ $defaultPassword }}
@endcomponent

<div>
 <a href="https://xpat.officedataghana.com/login" class="btn btn-lg btn-dark"> 
   https://xpat.officedataghana.com/login
 </a>
</div>

<div>
<p>Please login into the link below  and reset your password </p>
</div>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
