@foreach ($productAttributeSets as $attributeSet)
    <label>
        <input type="checkbox" class="hrv-checkbox attribute-set-item" name="attribute_sets[]" value="{{ $attributeSet->id }}" {{ $attributeSet->is_selected ? 'checked' : '' }}>
        {{ $attributeSet->title }}
    </label> &nbsp;
@endforeach
