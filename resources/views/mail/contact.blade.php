@component('mail::message')
    # Introduction

    Nouveau message
    <div class="flex-column">
        <div>
            {{$mail->name}} {{$mail->firstname}}
        </div>
        <div>
            {{$mail->mail}}
        </div>
        <div>
            {{$mail->message}}
        </div>
    </div>

    A bientôt, <br>
    {{ config('app.name') }}
@endcomponent