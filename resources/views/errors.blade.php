@if ($errors->any())
    <div class="error-message" role="alert" aria-live="assertive" style="color: red;">
        <strong>❌ Error:</strong> {{ $errors->first() }}
    </div>
@endif