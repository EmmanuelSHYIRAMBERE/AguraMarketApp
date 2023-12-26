<section class="section service" id="service" aria-label="service">
          
          <div class="container">
            <h2 class="h2 section-title">Services We Provides</h2>

            <p class="section-text">
              Increase your productivity, We appreciate being partiners towards lines of success.
            </p>

            <ul class="grid-list">
              
            @foreach($service as $services)
              
              <li>
                
                <div class="service-card">
                  <div class="card-icon" style="background-color: #ff612f">
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">{{$services->service_title}}</a>
                  </h3>

                  <p class="card-text">
                    {{$services->service_body}}
                  </p>
                </div>
              </li>

              @endforeach
            </div>
            </ul>
          </div>
        </section>