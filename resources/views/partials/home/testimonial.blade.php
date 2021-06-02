<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>
                        @php
                            $title1 = str_replace('(', '<span>', $title->titleHome2);
                            $title2 = str_replace(')', '</span>', $title1);
                            echo $title2;      
                        @endphp
                    </h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    @foreach ($testimonials as $testimonial)
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>{{$testimonial->quote}}</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/01.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
