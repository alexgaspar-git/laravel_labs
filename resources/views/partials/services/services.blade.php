<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Get in <span>the Lab</span> and see the services</h2>
        </div>
        <div class="row" id="paginate">
            <!-- single service -->
            @foreach ($pageServices as $service)
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{$service->icon}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$service->title}}</h2>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-12 d-flex"></div> --}}
            <p>{{$pageServices->links()}}</p>
        </div>
    </div>
</div>
