<x-layout>
    <x-slot:title>
    {{ $ad->title }}
    </x-slot>
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="my-3 text-center">{{ $ad->title }}</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('ad.update', ['ad' => $ad->id]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label for="txtTitle" class="col-md-4 col-form-label ">Заголовок:</label>
                                    <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $ad->title) }}">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label">Описание:</label>
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="8">{{ old('description', $ad->description )}}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label  for="category" class="col-md-4 col-form-label ">Категория:</label>
                                <div class="col-md-8">
                                    <select id="category" class="form-select @error('categories_ids') is-invalid @enderror" name="categories_ids">
                                        @foreach ($categories as $category)
                                            <option value=" " disabled>{{ $category->name }}</option>
                                            @foreach ($category->subcategories as $subcategory)
                                                @if($subcategory->slug == $ad->subcategory->slug)
                                                    <option value="{{ "$category->id/$subcategory->id" }}" selected>• {{  $subcategory->name }}</option>
                                                @else
                                                    <option value="{{ "$category->id/$subcategory->id" }}">• {{  $subcategory->name }}</option>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </select>
                                    @error('categories_ids')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Сохранить">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
