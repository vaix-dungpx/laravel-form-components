<input name="{{ $name }}" type="{{ $type }}" {{ $attributes->except(['required'])->merge(['class' => 'form-control']) }}
data-rule-maxlength="{{ INPUT_MAX_LENGTH}}" value="{{ $value }}" {{ $isRequired }} {{ $isReadonly }} {{ $plugins }}>
