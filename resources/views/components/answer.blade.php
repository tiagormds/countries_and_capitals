<div class="col-6 text-center">
    <a href="{{ route('answer', \Illuminate\Support\Facades\Crypt::encryptString($capital)) }}" class="text-decoration-none">
        <p class="response-option">{{ $capital }}</p>
    </a>
</div>
