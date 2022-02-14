<section>
    <div class="row">
        @foreach ($backs as $back)
            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset($back->src)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$back->nom}}</h5>
                      <p class="card-text">{{$back->fonction}}</p>
                    </div>
                  </div>
            </div>
            @if ($loop->iteration%3 == 0)
                </div>
                <div class="row">
            @endif
        @endforeach
    </div>
</section>