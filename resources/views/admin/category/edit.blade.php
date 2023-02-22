<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            Edit Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Edit Category </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('update.category', $category->id) }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="category_name" class="form-label"> Category Name</label>
                                    <input 
                                        name="category_name" 
                                        type="text" 
                                        class="form-control" 
                                        id="category_name" 
                                        aria-describedby=""
                                        value='{{ $category->category_name }}'
                                        >
                                    @error('category_name')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
