<h1>Your Star Rating</h1>
@if ($cost->rating)
  @if ($cost->rating->rating == '1')
  <div class="rating">
    <span class="star"></span>
    <span class="grey-star"></span>
    <span class="grey-star"></span>
    <span class="grey-star"></span>
    <span class="grey-star"></span>
  </div>
  <h3>{{ $cost->rating->review }}</h3>
  @endif
  @if ($cost->rating->rating == '2')
  <div class="rating">
    <span class="star"></span>
    <span class="star"></span>
    <span class="grey-star"></span>
    <span class="grey-star"></span>
    <span class="grey-star"></span>
  </div>
  <h3>{{ $cost->rating->review }}</h3>
  @endif
  @if ($cost->rating->rating == '3')
  <div class="rating">
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
    <span class="grey-star"></span>
    <span class="grey-star"></span>
  </div>
  <h3>{{ $cost->rating->review }}</h3>
  @endif
  @if ($cost->rating->rating == '4')
  <div class="rating">
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
    <span class="grey-star"></span>
  </div>
  <h3>{{ $cost->rating->review }}</h3>
  @endif
  @if ($cost->rating->rating == '5')
  <div class="rating">
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
    <span class="star"></span>
  </div>
  <h3>{{ $cost->rating->review }}</h3>
  @endif
  @else
  <form action="{{ route('cost.rating') }}" method="post">
    @csrf
    <fieldset>
      <span class="star-cb-group">
        <select class="form-select" aria-label="Default select example" name="rating">
          <option selected>Rate This Cost</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
          <option value="4">Four</option>
          <option value="5">Five</option>
        </select>
      </span>
      <div class="col-lg-12">
        <input type="text" class="form-control my-3" name="review" id="review" cols="30" rows="5" placeholder="Write Your Review Here" />
      </div>
      <input type="hidden" name="cost_id" value="{{ $cost->id }}">
      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    </fieldset>
    <button type="submit" class="btn btn-primary mb-4">Submit</button>
  </form>
  @endif
  