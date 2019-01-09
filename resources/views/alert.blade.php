@if (session()->has('message.success'))
    <div class="alert alert-success mb-4" role="alert">
        {{ $slot }} {{ session("message.success") }}
    </div>
@endif

@if (session()->has('message.error'))
    <div class="alert alert-danger mb-4" role="alert">
        {{ $slot }} {{ session("message.error") }}
    </div>
@endif

