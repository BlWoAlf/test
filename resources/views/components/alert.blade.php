<div {{ $attributes->merge(['class' => 'alert alert-'.$alertType]) }}>
    {{$message}}
    {{$slot}}
    <span>спан</span>
</div>

<div class="not-abooba">
    {{$not_aboba}}
</div>

<span>спан</span>