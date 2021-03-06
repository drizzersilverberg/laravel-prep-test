@php
    $readonly = $readonly ?? false;
@endphp

<div class="form-group">
    <label for="titleInput">{{ __('Product Title') }}</label>
    <input class="form-control" name="title" type="text" value="{{ old('title') ?? ($product->title ?? '') }}" id="titleInput" aria-describedby="titleHelp" @if ($readonly) readonly @endif>
    @if ($errors->has('title'))
        <div class="validation-messages">
            <ul>
                @foreach ($errors->get('title') as $message)
                    <li class="text-danger">{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<div class="form-group">
    <label for="descInput">{{ __('Product Description') }}</label>
    <textarea class="form-control" id="descInput" name="description" cols="30" rows="5" style="resize: none;" aria-describedby="descHelp" @if ($readonly) readonly @endif>{{ old('description') ?? ($product->description ?? '') }}</textarea>
    @if ($errors->has('description'))
        <div class="validation-messages">
            <ul>
                @foreach ($errors->get('description') as $message)
                    <li class="text-danger">{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="priceInput">{{ __('Product Price') }}</label>
            <input class="form-control w-50" name="price" type="number" value="{{ old('price') ?? ($product->price ?? 0) }}" min="0" max="1000" id="priceInput" aria-describedby="priceHelp" @if ($readonly) readonly @endif>
            @if ($errors->has('price'))
                <div class="validation-messages">
                    <ul>
                        @foreach ($errors->get('price') as $message)
                            <li class="text-danger">{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="stockInput">{{ __('Product Stock') }}</label>
            <input class="form-control w-50" name="stock" type="number" value="{{ old('stock') ?? ($product->stock ?? 0) }}" min="0" max="99" id="stockInput" aria-describedby="stockHelp" @if ($readonly) readonly @endif>
            @if ($errors->has('stock'))
                <div class="validation-messages">
                    <ul>
                        @foreach ($errors->get('stock') as $message)
                            <li class="text-danger">{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
          <label for="product-image">Product Image</label>
          <input type="file" name="image" class="form-control-file" id="product-image">
        </div>
    </div>
</div>