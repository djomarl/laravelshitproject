
<h1>Edit</h1>

{{ html()->form('PUT', '/update')->open() }}
{{ html()->input('hidden')->name('id')->value($boodschap->id)}}

<div class="form-group">
    {{ html()->label('E-mailadres')->for('email') }}
    {{ html()->email('email')->class('form-control')->placeholder('Vul je e-mailadres in')->value($boodschap->email)
 }}
</div>
<div class="form-group">
    {{ html()->label('Voornaam')->for('naam') }}
    {{ html()->text('naam')->class('form-control')->placeholder('Vul je voornaam in')->value($boodschap->naam)
 }}
</div>
<div class="form-group">
    {{ html()->label('Boodschap')->for('boodschap') }}
    {{ html()->textarea('boodschap')->class('form-control')->placeholder('Typ je boodschap')->value($boodschap->boodschap)
 }}
</div>
<div>
    {{ html()->submit('Verstuur') }}
</div>
{{ html()->form()->close() }}
