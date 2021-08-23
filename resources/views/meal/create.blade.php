<x-layouts.app>
  <x-search--meal/>
  <section class="section">
  <div class="container">
      <div class="title is-2 form">Create Meal</div>
      {{-- <form action="{{ route('meals.store') }}  " method="POST" enctype="multipart/form-data"> --}}
        <form action=" {{ route('meals.store') }}" method="POST">
       @csrf
       <div class="field">
          <label class="label form"> Meal Name</label>
          <div class="control">
            <input class="input @error('name')is-danger @enderror is-normal" name="name" type="text" value="{{ old('name') }}" placeholder="Enter Meal Name">
          </div>
          @error('name')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="field">
          <label class="label form"> Meal Price</label>
          <div class="control">
            <input class="input @error('price')is-danger @enderror is-normal" name="price" type="text" value="{{ old('price') }}" placeholder="Enter Meal price">
          </div>
          @error('price')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="field">
          <label class="label form"> Calory</label>
          <div class="control">
            <input class="input @error('calory')is-danger @enderror is-normal" name="calory" type="text" value="{{ old('calory') }}" placeholder="Enter Calory">
          </div>
          @error('calory')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="field">
          <label class="label form">Category</label>
          <div class="control" id="category_meal">
            <div class="select @error('category_meal_id')is-danger @enderror">
              <select name="category_meal_id" value="{{ old('category_meal_id') }}">
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->type }}</option>
                @endforeach
              </select>
            </div>
          </div>
          @error('category_meal_id')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="field">
          <label class="label form">Components</label>
          <div class="control" id="component">
            <div class="select is-multiple @error('components')is-danger @enderror">
              <select name="components[]"  multiple>
                @foreach ($components as $component)
                  <option value="{{ $component->id }}">{{ $component->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          @error('components')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="field">
          <div class="field">
            <label class="label form"> Image</label>
            {{-- <div class="file">
              <label class="file-label">
                <input class="file-input" type="file" name="image" accept="image/*">
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fas fa-upload"></i>
                  </span>
                  <span class="file-label">
                    Choose an image for meals
                  </span>
                </span> --}}
                <input class="input @error('image')is-danger @enderror is-normal" name="image" type="url"value="{{ old('image') }}" placeholder="Enter Image Meal" >
              </label>
            </div>
            @error('image')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
          </div>
        <div class="field is-grouped">
          <div class="control">
            <button class=" is-link form-button">Create</button>
          </div>
          <div class="control">
            <button class=" is-link is-light form-button">Cancel</button>
          </div>
        </div>
      </form>
  </div>


  </section>
  </x-layouts.app>
