<x-layouts.app>
  <x-navbar/>
<section class="section">
<div class="container">
  <div class="title is-2 form">Make Your Order from {{$restaurant->name}} Restaurant</div>
  <form action=" {{route('orders.store')}}" method="POST" >
    @csrf
    <input type="number" name="restaurant_id" value="{{$restaurant->id}}" hidden>
    <div class="field">
      <label class="label form">Place</label>
      <div class="control">
        <input class="input @error('place')is-danger @enderror is-normal" name="place" type="text" value="{{ old('place') }}" placeholder="Enter Place">
      </div>
      @error('place')
        <p class="help is-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="field">
      <label class="label form">Meals</label>
      <div class="control" id="meal">
        @foreach ($restaurant->categories as $category)
            @foreach ($category->meals as $meal)
            <table>
              <tr>
               <td><input name="meals[]"type="checkbox" value="{{ $meal->id }}">  <span class="form"> {{ $meal->name }}</span> &nbsp;</td>
               <td><img src="{{ $meal->image }}" alt="Placeholder image" style="width: 50px;height:50px;" >&nbsp;&nbsp;&nbsp;</td>
               <td><span class="form">Number: </span> <input name="quantity{{ $meal->id }}" type="number" placeholder="enter number" >&nbsp;&nbsp;</td>
               <td><span class="form">Price: </span> <input name= "price{{ $meal->id }}"  value= {{$meal->price}} style="border:none" readonly></td>

             </tr><br>
           </table>
                  @endforeach
              @endforeach
        </div>
      @error('meals')
        <p class="help is-danger">{{ $message }}</p>
      @enderror
    </div>

    <div class="field">
      <label class="label form">Notes</label>
      <div class="control">
        <textarea class=" textarea @error('notes')is-danger @enderror is-small" name="notes" placeholder="Enter your notes..">{{ old('notes') }}</textarea>
        <input type="hidden" name="content" id="content">
      </div>
      @error('notes')
        <p class="help is-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class='field'>
      <label class="label_form form">Donation To The Needy</label>
      <div class="control">
          <input type="number" value="0" name="donation" class="input"/>
      </div>
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

  {{-- <table>
      @foreach($meals as $meal)
          <tr>
              <td><input {{ $meal->name ? 'checked' : null }} data-id="{{ $meal->id }}" type="checkbox" ></td>
              <td>{{ $meal->name }}</td>
              <td><input value="{{ $meal->name ?? null }}" {{ $meal->name ? null : 'disabled' }} data-id="{{ $meal->id }}" name="meals[{{ $meal->id }}]" type="text"  placeholder="Amount"></td>
          </tr>
      @endforeach
  </table> --}}

  {{-- <div class="field">
      <label class="label">Meals</label>
      <div class="control" id="meal">
        <div class="select is-multiple @error('meals')is-danger @enderror">
          <select name="meals[]"  multiple>
            @foreach ($restaurant->categories as $category)
            @foreach ($category->meals as $meal)
              <option value="{{ $meal->id }}">{{ $meal->name }}</option>
              @endforeach
              @endforeach
          </select>
        </div>
      </div>
      @error('meals')
        <p class="help is-danger">{{ $message }}</p>
      @enderror
    </div> --}}
