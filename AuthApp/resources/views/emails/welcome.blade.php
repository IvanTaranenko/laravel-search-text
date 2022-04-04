@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'https://www.youtube.com/watch?v=4L79-JJxVjM'])
Visit site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
