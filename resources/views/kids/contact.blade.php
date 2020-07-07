@extends('kids.layout')
 
@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Ma'lumotlar</h2>
                <div class="page_link">
                  <a href="{{route('index')}}">Bosh sahifa</a>
                  <a href="#">Ma'lumotlar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
      <div class="container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d748.567915320222!2d69.19564156439725!3d41.36818217721294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1593594678293!5m2!1sru!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="row">
          <div class="col-lg-3">
            <div class="contact_info">
              <div class="info_item">
                <i class="ti-home"></i>
                <h6>Toshkent, Tansiqboyeva-3</h6>
                <p>Qoraqamish</p>
              </div>
              <div class="info_item">
                <i class="ti-headphone"></i>
                <h6><a href="#">+998()123456789</a></h6>
                <p>Dushanbadan Jumagacha 9:00 dan 18:00 gacha</p>
              </div>
              <div class="info_item">
                <i class="ti-email"></i>
                <h6><a href="#">130bog'cha@gmail.com</a></h6>
                <p>O'z fikr muohazalaringizni hohlagan vaqt yo'llashingiz mumkun !</p>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <form
              class="row contact_form"
              action="contact_process.php"
              method="post"
              id="contactForm"
              novalidate="novalidate"
            >
              <div class="col-md-6">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Ism"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'"
                    required=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Elektron manzil"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'"
                    required=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    name="subject"
                    placeholder="Mavzu"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'"
                    required=""
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    id="message"
                    rows="1"
                    placeholder="Matn"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Message'"
                    required=""
                  ></textarea>
                </div>
              </div>
              <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="btn primary-btn">
                  Jo'natish
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--================Contact Area =================-->
    @endsection