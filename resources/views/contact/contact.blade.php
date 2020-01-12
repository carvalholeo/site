<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h1 class="big big-2">Contact</h1>
          <h2 class="mb-4">Contact Me</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        </div>
      </div>

      <div class="row d-flex contact-info mb-5">
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box text-center p-4 shadow">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>
                <div>
                    <h3 class="mb-4">Address</h3>
                  <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box text-center p-4 shadow">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <div>
                    <h3 class="mb-4">Contact Number</h3>
                  <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
              </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box text-center p-4 shadow">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <div>
                    <h3 class="mb-4">Email Address</h3>
                  <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box text-center p-4 shadow">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-globe"></span>
                </div>
                <div>
                    <h3 class="mb-4">Website</h3>
                  <p><a href="#">yoursite.com</a></p>
              </div>
            </div>
        </div>
      </div>
      @include('components.flash-messages')
      <div class="row no-gutters block-9" id="form-section">
        <div class="col-md-6 order-md-last d-flex">
          <form action="{{ route('contact.send') }}" method="POST" class="bg-light p-4 p-md-5 contact-form">

            @yield('alert-messages')

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu Nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email" required>
            </div>
            <div class="form-group">
                <label for="assunto">Assunto</label>
                <select id="assunto" name="assunto" class="form-control" required>
                    <option disabled selected>Escolha uma opção</option>
                    <option value="Bugs">Bugs (erros no site)</option>
                    <option value="Ouvidoria">Críticas, elogios e sugestões</option>
                    <option value="Empregos">Oportunidade de emprego</option>
                    <option value="Amizade">Vamos fazer amizade</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" cols="30" rows="7" class="form-control" placeholder="Messagem" required></textarea>
            </div>
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LcEScgUAAAAAIxwvlfw5rbvAuVYdhbbPmChcept" data-callback="recaptchaSuccess" data-expired-callback="recaptchaError" id="recaptcha"></div>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <input type="submit" id="submit" value="Enviar!" class="btn btn-primary py-3 px-5" disabled>
            </div>
          </form>

        </div>

        <div class="col-md-6 d-flex">
            <div class="img" style="background-image: url({{ asset('storage/images/about.jpg') }});"></div>
        </div>
      </div>
    </div>

  </section>
  <script src="https://www.google.com/recaptcha/api.js"></script>
