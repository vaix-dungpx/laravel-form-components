<div class="input-group">
    @if ($attributes->has('prepend'))
        <span class="input-group-text">{{ $attributes->get('prepend') }}</span>
    @endif

    <x-form::input :name="$name" :type="$type" :value="$value"/>

    @if ($attributes->has('append'))
        <span class="input-group-text">{{ $attributes->get('append') }}</span>
    @endif
</div>
