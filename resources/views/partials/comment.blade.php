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
                <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                    <span class="sr-only">80% Complete (danger)</span>
                  </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">1</div>
        </div>
        <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                    <span class="sr-only">80% Complete (danger)</span>
                  </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">1</div>
        </div>
        <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                    <span class="sr-only">80% Complete (danger)</span>
                  </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">0</div>
        </div>
        <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                    <span class="sr-only">80% Complete (danger)</span>
                  </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">0</div>
        </div>
        <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                    <span class="sr-only">80% Complete (danger)</span>
                  </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">0</div>
        </div>
    </div>			
</div>			

<div class="comment-area my-5">
    @if ($cost->comment && $cost->comment->count() > 0)
                            
    <h3 class="mb-4 text-center">jumlah comment == {{ $cost->comment->count() }}</h3>
    @foreach ($cost->comment as $comment)
    <div class="review-block">
        <div class="row">
            <div class="col-sm-3">
                <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                <div class="review-block-name"><a href="#">{{ $comment->user->name }}</a></div>
                <div class="review-block-date">{{ $comment->created_at }}<br/>1 day ago</div>
            </div>
            <div class="col-sm-9">
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
                <div class="review-block-description">{{ $comment->comment }}</div>
            </div>
        </div>
        <hr/>
    </div>
        
    <div class="comment-area-box media">
        <img alt="" src="images/blog-user-2.jpg" class="img-fluid float-left mr-3 mt-2">

        <div class="media-body ml-4">
            <h4 class="mb-0"></h4>
            <span class="date-comm font-sm text-capitalize text-color"><i
                    class="ti-time mr-2"></i></span>

            <div class="comment-content mt-3">  
                <p></p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<form action="{{ route('cost.comment') }}" method="POST" class="comment-form mb-5 gray-bg p-5" id="comment-form">
    @csrf
    <h3 class="mb-4 text-center">Leave a comment</h3>
    <div class="row">
        <div class="col-lg-12">
            <input type="text" class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
                placeholder="Comment" required />
        </div>
        <input type="hidden" name="cost_id" value="{{ $cost->id }}">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>

</div>
                        @else
                        <h3 class="mb-4 text-center">No Comments Yet</h3>
                    </div>
                    <form action="{{ route('cost.comment') }}" method="POST" class="comment-form mb-5 gray-bg p-5" id="comment-form">
                        @csrf
                        <h3 class="mb-4 text-center">Leave a comment</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
                                    placeholder="Comment" />
                            </div>
                            <input type="hidden" name="cost_id" value="{{ $cost->id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        </div>
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                    </div>
                    @endif
                    </div>