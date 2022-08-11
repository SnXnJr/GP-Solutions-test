<section class="contact">
    <div class="container">
        <div class="contact__container d-flex d-flex-ai-start"> 
            <div class="form">
                <h4 class="title title--left">Get In Touch</h4>
                <p>Still have questions? Contact us</p>
                <form class="form" action="">
                    <div class="form__row form__row--two-col">
                        <label>
                            <input type="text" placeholder="Name">
                        </label>
                        <label>
                            <input type="email" placeholder="Email">
                        </label>
                    </div>
                    <div class="form__row">
                        <label>
                            <textarea name="" placeholder="Message"> </textarea>
                        </label>
                    </div>
                    <span>By sending this form I confirm that I have read and accept HotelPort Privacy Policy</span>
                    <input class="btn" type="submit" value="Send Message">
                </form>
            </div>
            <div class="contact__list">
                <?php the_sub_field('content'); ?>
            </div>
        </div>
    </div>
</section>