<div class="row row-cols-1 row-cols-md-2 g-4">
     @foreach ($products as $product)
    <div class="col">       
        <div class="card h-100">
        <img src="{{asset(image/produits).$product->picture}}" class="card-img-top" alt="{{$product->name}}">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">{{$product->description}}</p>
          <p class="card-text">{{$product->price}}</p>
        </div>
        </div>
    </div>
      @endforeach
</div>
