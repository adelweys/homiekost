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
                                        <span><small class="font-weight-bold text-primary">{{ $comment->user->name }}</small> <small class="font-weight-bold">{{ $comment->comment }}</small></span>
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
                