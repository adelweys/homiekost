<h1>Your Star Rating</h1>
@if ($cost->rating)
  @if ($cost->rating->rating == '1')
  <div class="review-block-rate">
    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
    <button type="button" class="btn btn-default btn-grey btn-x" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
    <button type="button" class="btn btn-default btn-grey btn-x" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
    <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
    <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
  </div>
  @endif
  @if ($cost->rating->rating == '2')
  <div class="review-block-rate">
    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
    <button type="button" class="btn btn-default btn-grey btn-x" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
    <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
    <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
  </div>
  @endif
  @if ($cost->rating->rating == '3')
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
    <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
    <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
  </div>
  @endif
  @if ($cost->rating->rating == '4')
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
    <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
  </div>
  @endif
  @if ($cost->rating->rating == '5')
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
    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button>
  </div>
  @endif
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
        <input type="text" class="form-control my-3" name="review" id="review" cols="30" rows="5" placeholder="Write Your Review Here" />
      </div>
      <input type="hidden" name="cost_id" value="{{ $cost->id }}">
      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    </fieldset>
    <button type="submit" class="btn btn-primary mb-4">Submit</button>
  </form>
  @endif
  <div class="row">
    <div class="col-sm-3">
        <div class="rating-block">
            <h4>Average user rating</h4>
            <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
            <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
        </div>
    </div>
    <div class="col-sm-3">
        <h4>Rating breakdown</h4>
        <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">  <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                    <span class="sr-only">80% Complete (danger)</span>
                  </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">{{ $cost->rating ? $cost->rating->where('rating', 5)->count() : 0 }}</div>
        </div>
        <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;"><span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                    <span class="sr-only">80% Complete (danger)</span>
                  </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">{{ $cost->rating ? $cost->rating->where('rating', 4)->count() : 0 }}</div>
        </div>
        <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;"><span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                    <span class="sr-only">60% Complete (danger)</span>
                  </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">{{ $cost->rating ? $cost->rating->where('rating', 3)->count() : 0 }}</div>
        </div>
        <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;"><span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                    <span class="sr-only">40% Complete (danger)</span>
                  </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">{{ $cost->rating ? $cost->rating->where('rating', 2)->count() : 0 }}</div>
        </div>
        <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;"><span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                    <span class="sr-only">20% Complete (danger)</span>
                  </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">{{ $cost->rating ? $cost->rating->where('rating', 1)->count() : 0 }}</div>
        </div>
    </div>
  </div>
