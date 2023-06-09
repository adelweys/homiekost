<div class="container mt-5 w-100 p-3">
  @if ($cost->comment && $cost->comment->count() > 0)
    <div class="row d-flex w-100 p-3">
      <div class="col-md-8">
        <div class="headings d-flex justify-content-between align-items-center mb-3">
          <h5>Comment({{ $cost->comment->count() }})</h5>
        </div>
        @foreach ($cost->comment as $comment)
          <div class="card p-3">
            <div class="d-flex justify-content-between align-items-center">
              <div class="user d-flex flex-row align-items-center">
                <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2">
                <span>
                  <small class="font-weight-bold text-primary">{{ $comment->user->name }}</small>
                  <small class="font-weight-bold">{{ $comment->comment }}</small>
                </span>
              </div>
              <small>{{ $comment->created_at->diffForHumans() }}</small>
            </div>

            <div class="action d-flex justify-content-between mt-2 align-items-center">
              <div class="reply px-4">
                <small>Remove</small>
                <span class="dots"></span>
                <small>Reply</small>
                <span class="dots"></span>
                <small>Translate</small>
              </div>

              <div class="icons align-items-center">
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-check-circle-o check-icon"></i>
              </div>
            </div>
            
            <!-- Reply Section -->
            <div class="reply-section mt-3">
              @if ($comment->reply && $comment->reply->count() > 0)
                @foreach ($comment->reply as $reply)
                  <div class="card p-3">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="user d-flex flex-row align-items-center">
                        <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2">
                        <span>
                          <small class="font-weight-bold text-primary">{{ $reply->user->name }}</small>
                          <small class="font-weight-bold">{{ $reply->replies }}</small>
                        </span>
                      </div>
                      <small>{{ $reply->created_at->diffForHumans() }}</small>
                    </div>
                  </div>
                @endforeach
              @endif

              <!-- Reply Form -->
              <form action="{{ route('cost.reply') }}" method="POST" class="reply-form mt-3">
                @csrf
                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                <div class="row">
                  <div class="col-lg-12">
                    <input type="text" class="form-control mb-3" name="replies" placeholder="Reply" required />
                  </div>
                  <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                  <input type="hidden" name="cost_id" value="{{ $cost->id }}">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit Reply</button>
              </form>
            </div>
          </div>
        @endforeach
      </div>
      <form action="{{ route('cost.comment') }}" method="POST" class="comment-form mb-5 gray-bg p-5" id="comment-form">
        @csrf
        <h3 class="mb-4 text-center">Leave a comment</h3>
        <div class="row">
          <div class="col-lg-12">
            <input type="text" class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment" required />
          </div>
          <input type="hidden" name="cost_id" value="{{ $cost->id }}">
          <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
      </form>
    </div>
  @else
    <h3 class="mb-4 text-center">No Comments Yet</h3>
    <form action="{{ route('cost.comment') }}" method="POST" class="comment-form mb-5 gray-bg p-5" id="comment-form">
      @csrf
      <h3 class="mb-4 text-center">Leave a comment</h3>
      <div class="row">
        <div class="col-lg-12">
          <input type="text" class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment" />
        </div>
        <input type="hidden" name="cost_id" value="{{ $cost->id }}">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
      </div>
      <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
  </div>
@endif
