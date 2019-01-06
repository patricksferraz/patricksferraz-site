@if ($errors->any())
    <div class="row">
        <div class="col s12">
            <div class="card-panel
            @if ($errors->hasAny('messages'))
                green
            @else
                red
            @endif lighten-1">
                <span class="white-text">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </span>
            </div>
        </div>
    </div>
@endif
