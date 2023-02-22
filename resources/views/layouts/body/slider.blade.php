
<!-- Stat Hero Slider Area -->
<div class="hero-slider-area hero-slider owl-carousel owl-theme">
  @foreach($sliders as $key => $slider)
    <div class="hero-slider-item bg-1" style='background-image: url("{{ asset($slider->slider_image) }}")' >
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container-fluid">
            <div class="hero-slider-content one">
              <!-- <h1> <span>construction</span> service</h1> -->
              <h1>{{ $slider->slider_title }} </h1>
              <p>{{ $slider->slider_description }}</p>
              
              <div class="hero-slider-btn">
                <a href="{{ route('home.about') }}" class="default-btn">
                  View more
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <span class="border-text" style="font-size: 200px;">HYPERBARIC</span>
    </div>
  @endforeach
    <!-- <div class="hero-slider-item bg-2">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container-fluid">
            <div class="hero-slider-content two">
              <h1><span>Construction</span> & infrastructure services company</h1>
                
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio architecto culpa, eveniet inventore veritatis minus. Corporis molestias velit ab asperiores amet doloremque expedita in eos quasi</p> 

              <div class="hero-slider-btn">
                <a href="about.html" class="default-btn">
                  View more
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <span class="border-text">CONZIO</span>
    </div> -->
</div>
<!-- End Hero Slider Area -->
