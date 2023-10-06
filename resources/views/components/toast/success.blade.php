@props(['message'])

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div class="toast py-2 bg-success-subtle">
        <div class="toast-body">
            <p class="m-0 text-center text-capitalize fs-09">
                <i class="bi bi-check-circle-fill me-1"></i>
                {{ $message }}
            </p>
        </div>
    </div>
</div>
