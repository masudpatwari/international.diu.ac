@if (session()->has('message.success'))
    <div class="alert alert-success mb-4" role="alert">
        <strong>Thank You!</strong>! {{ session("message.success") }}
    </div>
@endif

@if (session()->has('message.error'))
    <div class="alert alert-danger mb-4" role="alert">
        <strong>Failed!</strong>! {{ session("message.error") }}
    </div>
@endif

