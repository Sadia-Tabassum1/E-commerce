@extends('frontend.pages.master')

@section('content')


@foreach($singleCategory->products as $product)
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                      <img src=" {{ asset('/uploads/product/'.$product->image)}}" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>{{$product->name}}</h4>
                        <p>{{$product->price}}</p>
                        <div class="portfolio-links">
                          <a href="uploads/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                          <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
        @endforeach



@endsection