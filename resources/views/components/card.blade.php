                <div class="card" style="width: 18rem;">
                    <img src="{{$item['image']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$item['title']}}</h5>
                        <p class="card-text">{{$item['description']}}</p>
                        <a href="{{route('show', ['id' => $item['id']])}}" class="btn btn-primary">{{$item['title']}}</a>
                    </div>
                </div>