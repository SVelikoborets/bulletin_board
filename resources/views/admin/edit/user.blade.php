<x-layout>
    <x-slot:title>
    {{ $user->name }}
    </x-slot>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="my-3 text-center">{{ $user->name}}</h1>
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="userName" class="form-label">Имя</label>

                            <input name="userName" id="userName" class="form-control @error('userName') is-invalid @enderror" value="{{ old('userName', $user->name) }}">

                            @error('userName')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>

                            <input name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email', $user->email) }}">

                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label ">Статус</label>

                            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                                @if($user->banned)
                                    <option value="{{old('status', $user->banned) }}" selected>Banned</option>
                                    <option value="0">Active</option>
                                @else
                                    <option value="{{old('status', $user->banned) }}" selected>Active</option>
                                    <option value="1">Banned</option>
                                @endif
                            </select>

                            @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <input type="submit" class="btn btn-primary" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
