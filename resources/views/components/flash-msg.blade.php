@if (flash()->message)
    <div class="alert alert-{{ flash()->class ?? 'info' }} d-flex align-items-center" role="alert">

        @if (flash()->class === 'warning' || flash()->class === 'danger')
            <i class="bi bi-exclamation-triangle me-2"></i>
        @endif

        @if (flash()->class === 'info')
            <i class="bi bi-exclamation-circle me-2"></i>
        @endif

        @if (!flash()->class || flash()->class === 'success')
            <i class="bi bi-check-circle me-2"></i>
        @endif

        {{ flash()->message }}
    </div>
@endif