<section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>

      </div>

      <div class="row">
        @foreach(Config('jujaservices') as $key => $value)
        
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
              <div class="icon"><i class="{{$value['icon']}}"></i></div>
              <h4><a href="">{{$value['title']}}</a></h4>
              <p>{{$value['small_desc']}}</p>
          </div>
        </div>
        
        @endforeach
        
    </div>
    
</div>
</section>
