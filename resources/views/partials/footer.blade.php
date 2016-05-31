
<section id="contact">
<div class="fh5co-footer-style-1">
    <div class="fh5co-subscribe" style="background-image: url(images/contact.jpg);">
        <div class="fh5co-overlay"></div>
        <div class="container form wow fadeInUp">
            <div class="row p-b">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2 class="fh5co- heading">Contact us</h2>
                    <p>Your idea has no borders.</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <form action="{{ route('connect.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-4">
                            <div class="form-group">
                                <i class="icon-user"></i>
                                <label class="sr-only" for="footer-style-1-name">Name</label>
                                <input type="text" name="Name" class="form-control" id="footer-style-1-name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <i class="icon-mail"></i>
                                <label class="sr-only" for="footer-style-1-email">Email</label>
                                <input type="email" name="email" class="form-control" id="footer-style-1-email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <i class="icon-phone"></i>
                                <label class="sr-only" for="footer-style-1-email">Phone</label>
                                <input type="phone" name="phone" class="form-control" id="footer-style-1-email" placeholder="Your Phone">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <i class="icon-message"></i>
                                <label class="sr-only" for="footer-style-1-message">message</label>
                                <textarea class="form-control" name="message" id="footer-style-1-message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row fh5co-footer-inner wow fadeInUp">
            <div class="col-md-5 col-sm-5">
                <div class="fh5co-logo">
                    <a href="#"><img src="/images/linkick-small.png" width="36px" style="vertical-align: super;"></a>
                    <p class="copyright"><small>Chengdu Origeno Co., Ltd <br>
                    No. 65 Kehua North Road, Chengdu <br>
                    Tel: +86 028 85460838<br>© 2016. All Rights Reserved.</small></p>
                </div>
            </div>
            
            <div class="col-md-6 col-md-push-1 col-sm-6 col-sm-push-1">
                <div class="row">
                        <ul class="links pull-right" style="margin: 20px 0;">
                            <li><a href="#what">What we do</a></li>
                            <li><a href="#how">How we do</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                </div>
            </div>

            
        </div>
    </div>
</div>

</section>