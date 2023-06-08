<h1>Your Star Rating</h1>
@if ($cost->rating)
    <div class="review-block-rate">
      <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      </button>
      <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      </button>
      <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      </button>
      <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      </button>
      <button type="button" class="btn btn btn-warning btn-xs" aria-label="Left Align">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      </button>
      <h2>{{ $cost->rating->review }}</h2>
    </div>
@else
<form action="{{ route('cost.rating') }}" method="post">
  @csrf
  <fieldset>
    <span class="star-cb-group">
      <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
      <input type="radio" id="rating-4" name="rating" value="4" checked="checked" /><label for="rating-4">4</label>
      <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
      <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
      <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
      <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" /><label for="rating-0">0</label>
    </span>
    <div class="col-lg-12">
      <input type="text" class="form-control mb-3" name="review" id="review" cols="30" rows="5" placeholder="Write Your Review Here" />
    </div>
    <input type="hidden" name="cost_id" value="{{ $cost->id }}">
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
  </fieldset>
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
@endif
