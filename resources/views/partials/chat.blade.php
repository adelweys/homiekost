
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Chat</div>

                    <div class="card-body">
                        <div class="messages">
                            @foreach ($messages as $message)
                                <div class="message">
                                    <strong>{{ $message->fromUser->name }}:</strong> {{ $message->message }}
                                </div>
                            @endforeach
                        </div>

                        <form action="{{ route('chat.send') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="to_user_id">To:</label>
                                <select name="to_user_id" id="to_user_id" class="form-control">
                                        <option value="{{ $cost->user_id }}">{{ $cost->user->name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea name="message" id="message" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>