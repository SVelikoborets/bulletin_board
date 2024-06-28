<x-layout>
    <x-slot:title>
    Новое объявление
    </x-slot>
    <div class="container">
        <div class="row justify-content-center brick">
            <h1 class="my-3 text-center">Новое объявление</h1>
            <div class="card ">
                <div class="card-body">
                    <form method="POST" action="{{ route('ad.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">
                                Название</label>

                            <div class="col-md-8">
                                <input id="title" type="text"
                                       class="form-control @error('title') is-invalid @enderror" name="title"
                                       value="{{ old('title') }}" required autocomplete="email" autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description"
                                   class="col-md-4 col-form-label text-md-end">Описание</label>

                            <div class="col-md-8">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="3">{{ old('description') }}</textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label  for="category" class="col-md-4 col-form-label text-md-end">Категория</label>

                            <div class="col-md-8">
                                <select id="category" class="form-select @error('categories_ids') is-invalid @enderror" name="categories_ids">
                                    <option value="">Выбрать категорию</option>
                                    @foreach ($categories as $category)
                                        <option value=" " disabled>{{ $category->name }}</option>
                                        @foreach ($category->subcategories as $subcategory)
                                            @if($subcategory->slug == $selected)
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
                        <input  value ="{{Auth::user()->id}}" name ="user_id" type="hidden">
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                  Отправить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

