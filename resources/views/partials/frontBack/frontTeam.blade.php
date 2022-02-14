<section>
    <div class="row">
        @foreach ($fronts as $front)
            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset($front->src)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$front->nom}}</h5>
                      <p class="card-text">{{$front->fonction}}</p>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</section>