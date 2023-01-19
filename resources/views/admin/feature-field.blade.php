@if (old('category'))
    @foreach (old('category') as $k => $value)
        <div class="form-group">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Service Category" name="category[]"
                    value="{{ $value }}">
                <a class="input-group-text bg-danger text-white d-block remove-feature">x</a>
            </div>
            {{-- <x-error :key="'category.'.$k" /> --}}
        </div>
    @endforeach
@elseif(isset($category) && count($category))
    @foreach ($category as $value)
        <div class="form-group">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Service Category" name="category[]"
                    value="{{ $value }}">
                <a class="input-group-text bg-danger text-white d-block remove-feature">x</a>
            </div>
        </div>
    @endforeach
@else
    <div class="form-group">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Service Category" name="category[]">
            <a class="input-group-text bg-danger text-white d-block remove-feature">x</a>
        </div>
    </div>
@endif
