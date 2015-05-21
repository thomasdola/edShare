<div class="row ">
    <div class="col-md-6 text-left small-screen-center os-animation element-normal-bottom" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
        <form id="contactForm" class="contact-form">
            <div class="form-group form-icon-group">
                <input class="form-control" id="name" name="name" placeholder="Your name *" type="text" required/>
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group form-icon-group">
                <input class="form-control" id="email" name="email" placeholder="Your email *" type="email" required>
                <i class="fa fa-envelope"></i>
            </div>
            <div class="form-group form-icon-group">
                <textarea class="form-control" id="message" name="message" placeholder="Your message" rows="10" required></textarea>
                <i class="fa fa-pencil"></i>
            </div>
            <div>
                <input type="submit" value="Send email" class="btn btn-primary">
            </div>
            <div id="messages"></div>
        </form>
    </div>
    <div class="col-md-6  text-center small-screen-center os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.5s">
        <div class="google-map element-no-top element-short-bottom" id="map" style="height:356px;"></div>
    </div>
</div>