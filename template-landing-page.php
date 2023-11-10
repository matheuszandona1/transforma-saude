 
 <?php
/*
Template Name: Landing Page
*/
?>

<?php get_header("lp");


function adding_logical_scripts() {
    if (is_page_template('template-landing-page.php')) {
        wp_enqueue_script('js', get_template_directory_uri() . '/res/js/index.js', array('jquery'), null, true);
    }

    if (is_page_template('template-politica.php')) {
        wp_enqueue_script('js', get_template_directory_uri() . '/res/js/index.js', array('jquery'), null, true);
    }
        if (is_page_template('template-typ.php')) {
        wp_enqueue_script('js', get_template_directory_uri() . '/res/js/index.js', array('jquery'), null, true);
    }

    if (is_page_template('template-landing-page.php')) {
        wp_enqueue_script('jquery', get_template_directory_uri() . '/res/js/jquery.js', array('jquery'), null, true);
    }
        if (is_page_template('template-politica.php')) {
        wp_enqueue_script('jquery', get_template_directory_uri() . '/res/js/jquery.js', array('jquery'), null, true);
    }

    if (is_page_template('template-typ.php')) {
        wp_enqueue_script('jquery', get_template_directory_uri() . '/res/js/jquery.js', array('jquery'), null, true);
    }
}

add_action('wp_enqueue_scripts', 'adding_logical_scripts');?>
 
 
 <main>
    <section class="hero" data-aos="fade-down" data-aos-delay="300">
      <div class="d-flex hero__container">
        <div class="hero__content">
          <div class="hero__holder">
            <div class="hero__logo" style="margin: 0 auto 32px">
              <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/logo-hero.svg" alt />
            </div>
          </div>
          <h1 class="hero__title text-center">
            A Transformação da Saúde começa com você! <br />
            <span>Juntos pela sustentabilidade do seu negócio.</span>
          </h1>
          <p class="default__desc text-center">
            Serviços de consultoria especializada e cursos de capacitação para
            profissionais da saúde, totalmente personalizados para as
            necessidades da sua gestão.
          </p>
          <div class="button--container justify-content-center">
            <a href="#form" class="bigger button"> FALE COM NOSSA EQUIPE</a>
          </div>
        </div>
      </div>
    </section>
    <section class="numbers">
      <div class="numbers__container">
        <div class="numbers__card">
          <p class="numbers__text">+ de <span>30</span></p>
          <p class="numbers__desc">
            Acreditações / Certificações de organizações Prestadoras deserviços
            de saúde
          </p>
        </div>
        <div class="numbers__card">
          <p class="numbers__text">+ de <span>10</span></p>
          <p class="numbers__desc">
            Acreditações / Certificações de Operadoras de Planos de Saúde
          </p>
        </div>
        <div class="numbers__card">
          <p class="numbers__text">+ de <span>70</span></p>
          <p class="numbers__desc">
            Instituições com Estruturação de processos e melhorias de gestão em
            saúde
          </p>
        </div>
        <div class="numbers__card">
          <p class="numbers__text">+ de <span>30</span></p>
          <p class="numbers__desc">
            Instituições de Saúde com implantação da metodologia DRG com êxito
            na melhoria da qualidade assistencial e redução de custo
            assistencial
          </p>
        </div>
        <div class="numbers__card">
          <p class="numbers__text">100 <span>%</span></p>
          <p class="numbers__desc">
            Resultado esperado em 100% das auditorias externas de Acreditações /
            Certificações
          </p>
        </div>
        <div class="numbers__card">
          <p class="numbers__text">+ de <span>2000</span></p>
          <p class="numbers__desc">Profissionais de Saúde capacitados</p>
        </div>
      </div>
    </section>
    <section class="resources">
      <div class="resources__container">
        <h2 class="default__title" data-aos="fade-down" data-aos-delay="300">
          Nossos serviços sob medida para a gestão do seu negócio.
        </h2>
        <div class="resources__content">
          <div
            class="card-resources"
            data-aos="fade-right"
            data-aos-delay="300"
          >
            <div class="card-resources__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/p-star.svg" alt />
            </div>
            <p class="default__desc">
              <b>EXPERIÊNCIA COMPROVADA</b>Já são mais de 10 anos no mercado de
              consultoria e cursos de capacitação, transformando a saúde de
              várias organizações como a sua.
            </p>
          </div>
          <div
            class="card-resources"
            data-aos="fade-right"
            data-aos-delay="400"
          >
            <div class="card-resources__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/grafico.svg" alt />
            </div>
            <p class="default__desc">
              <b>METODOLOGIA ÁGIL</b>Com saúde, não dá para perder tempo. Por
              isso, focamos no que realmente importa para maximizar seus
              resultados em tempo recorde.
            </p>
          </div>
          <div
            class="card-resources"
            data-aos="fade-right"
            data-aos-delay="500"
          >
            <div class="card-resources__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/icone-personalizado.svg" alt />
            </div>
            <p class="default__desc">
              <b>SERVIÇO PERSONALIZADO</b>Sabemos que cada cliente é único. Por
              isso, personalizamos nossos serviços para atender às necessidades
              específicas da sua organização.
            </p>
          </div>
          <div
            class="card-resources"
            data-aos="fade-right"
            data-aos-delay="500"
          >
            <div class="card-resources__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/icone-resultados.svg" alt />
            </div>
            <p class="default__desc">
              <b>RESULTADOS SÓLIDOS</b>Já são mais de 2000 profissionais da área
              da saúde capacitados e 100% de sucesso em auditorias realizadas
              pela nossa equipe.
            </p>
          </div>
        </div>
        <div
          class="button--container center"
          data-aos="fade-right"
          data-aos-delay="300"
        >
          <a href="#" class="bigger button">TRANSFORME AGORA SUA GESTÃO</a>
        </div>
      </div>
    </section>
    <section class="solutions">
      <h2 class="default__title">
        Soluções pensadas e executadas por quem tem experiência no mercado de
        Saúde
      </h2>
      <p class="default__desc">
        Temos soluções que atendem a todos os tipos de organizações prestadoras
        de serviços de saúde e operadoras de planos de saúde, mas de um jeito
        100% personalizado. Nossos especialistas, com experiência no mercado de
        saúde, desenvolvem um projeto totalmente voltado para as necessidades do
        seu negócio:
      </p>
      <div class="solutions__container">
        <div class="solutions__card">
          Acreditações e certificações para o sistema de saúde
        </div>
        <div class="solutions__card">Governança Clínica</div>
        <div class="solutions__card">Planejamento estratégico</div>
        <div class="solutions__card">Gestão da Qualidade Outsourced</div>
        <div class="solutions__card">Auditorias Internas</div>
        <div class="solutions__card">
          Reengenharia de processos e sustentabilidade do sistema de saúde
        </div>
        <div class="solutions__card">
          QualyHealth: Selo de Qualidade e Valor em Saúde
        </div>
        <div class="solutions__card">Gestão da Segurança do paciente</div>
        <div class="solutions__card">
          Cursos de capacitação presenciais e EaD
        </div>
      </div>
      <div class="button--container">
        <a href="#form" class="bigger button white">solicite um diagnóstico</a>
      </div>
    </section>
    <section class="map">
      <section class="hero" data-aos="fade-down" data-aos-delay="300">
        <div class="hero__container">
          <div class="hero__content">
            <div class="hero__logo"></div>
            <h2 class="hero__title">
              Estamos transformando a gestão em saúde de vários stakeholders do
              sistema de saúde, em todo Brasil.
            </h2>
            <div class="button--container">
              <a href="#form" class="bigger button">monetize seu conteúdo</a>
            </div>
          </div>
          <div class="hero__img">
            <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/mapa.webp" alt />
          </div>
        </div>
      </section>
    </section>
    <section class="transform">
      <section class="resources">
        <div class="resources__container">
          <h2 class="default__title" data-aos="fade-down" data-aos-delay="300">
            A transformação já acontece para eles
          </h2>
          <div class="resources__content">
            <div
              class="card-resources"
              data-aos="fade-right"
              data-aos-delay="300"
            >
              <div class="card-resources__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/logo.svg" alt />
              </div>
              <p class="default__desc"><b>Empresa</b> Nome do grupo</p>
            </div>
            <div
              class="card-resources"
              data-aos="fade-right"
              data-aos-delay="400"
            >
              <div class="card-resources__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/logo.svg" alt />
              </div>
              <p class="default__desc"><b>Empresa</b> Nome do grupo</p>
            </div>
            <div
              class="card-resources"
              data-aos="fade-right"
              data-aos-delay="500"
            >
              <div class="card-resources__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/logo.svg" alt />
              </div>
              <p class="default__desc"><b>Empresa</b> Nome do grupo</p>
            </div>
            <div
              class="card-resources"
              data-aos="fade-right"
              data-aos-delay="500"
            >
              <div class="card-resources__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/logo.svg" alt />
              </div>
              <p class="default__desc"><b>Empresa</b> Nome do grupo</p>
            </div>
          </div>
          <div
            class="button--container center"
            data-aos="fade-right"
            data-aos-delay="300"
          >
            <a href="#" class="bigger button">FALE COM O NOSSO TIME</a>
          </div>
        </div>
      </section>
    </section>
    <section class="testimonials">
      <div class="testimonials__container">
        <h3 class="default__title">Histórias de sucesso:</h3>
        <p class="default__desc">o que nossos clientes têm a dizer</p>
        <div class="testimonials__content">
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/avatar.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Eduardo Cezário</p>
                <p class="avatar__desc">
                  Hospital Monte Sinai <br />- Juiz de Fora -MG
                </p>
              </div>
            </div>
            <p class="testimonials__card--text">
              Tivemos a oportunidade de conhecer o trabalho da Transforma Saúde
              em março/2020 onde fechamos um contrato de 6 meses para prestação
              de serviços de consultoria com foco no atendimento aos novos
              requisitos do manual da Acreditação (versão 2018), visando uma
              melhor preparação do Hospital Monte Sinai para a recertificação de
              Acreditado com Excelência (Nível 3).
            </p>
          </div>
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/avatar-1.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Daniela Faustino</p>
                <p class="avatar__desc">AUSTA - SP</p>
              </div>
            </div>
            <p class="testimonials__card--text">
              Trabalhar com a Transforma Saúde tem sido uma experiência muito
              bacana junto ao AUSTA clínicas. Ela possui uma equipe
              multiprofissional e altamente capacitada para o processo de
              acreditação de operadoras de Saúde, o que tem proporcionado uma
              maior segurança aos nossos colaboradores para desenvolver as
              atividades necessárias e que atendam o escopo da RN 452.
            </p>
          </div>
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/avatar-2.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Roberto Moreira</p>
                <p class="avatar__desc">Unimed Blumenau - SC</p>
              </div>
            </div>
            <p class="testimonials__card--text">
              Estou aqui para atestar a competência da Transforma Saúde no
              desenvolvimento do trabalho para gerar valor em saúde. Na prática,
              conseguimos mudar a visão das pessoas quanto à forma de gerir e
              também na maneira de entregar o produto "saúde". São profissionais
              com conhecimento de causa que conseguem unir a cadeia produtiva em
              um objetivo só que é deixar o cliente satisfeito.
            </p>
          </div>
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/avatar-3.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Maria Cristina</p>
                <p class="avatar__desc">Unimed Região da Fronteira - RS</p>
              </div>
            </div>
            <p class="testimonials__card--text">
              A equipe da Transforma Saúde tem foco, determinação e
              conhecimento. A Unimed Região da Fronteira tem uma experiência
              muito positiva e produtiva com esse trabalho em conjunto.
              Desejamos que essa equipe continue nessa caminhada acrescentando
              valor humano e material nos seus objetivos.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="form" id="form">
      <section class="hero" data-aos="fade-down" data-aos-delay="300">
        <div class="hero__container">
          <div class="hero__content">
            <h2 class="hero__title">
              Queremos entender sua necessidade e agregar valor à sua
              organização.
            </h2>
            <h3 class="hero__sub-title">Vamos conversar?</h3>
            <p class="default__desc">
              Todos os especialistas do nosso time têm experiência no mercado de
              saúde e entendem a realidade do seu negócio. Por isso, eles são
              altamente preparados e qualificados para a execução dos projetos
              que a sua organização realmente precisa para transformar.<br /><br />
              Nosso primeiro contato é para conhecer você e entender as
              necessidades reais da sua organização, as metas a serem alcançadas
              e, assim, definirmos juntos o melhor projeto. <br /><br />
              <b> Preencha os dados para falar com a nossa equipe: </b>
            </p>
          </div>
          <div class="half hero__form">
                <form class="contact__form" action="https://api.staticforms.xyz/submit" method="POST">
                    <div class="form-gap">
                        <div class="input_wrap">
                            <input type="text" name="name" required />
                            <label><img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/person.svg" alt /> Nome</label>
                        </div>
                        <div class="input_wrap">
                            <input type="email" name="email" required />
                            <label><img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/mail.svg" alt /> E-mail</label>
                        </div>
                        <div class="input_wrap">
                            <input type="tel" name="telefone" required />
                            <label><img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/phone.svg" alt /> Telefone</label>
                        </div>
                    </div>
                            <input type="text" name="honeypot" style="display:none">
                            <input type="hidden" name="accessKey" value="e54aa399-de10-4d8a-84b9-15f18b3c9753">
                            <input type="hidden" name="redirectTo" value="https://example.com/contact/success">
                    <button type="submit" class="button">quero entrar</button>
                </form>

          </div>
        </div>
        <div class="hero__slider">
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/trb-1.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Thiago Pinheiro</p>
                <p class="avatar__desc">Gerente Financeiro</p>
              </div>
            </div>
          </div>
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/trb-2.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Mariana Vaz</p>
                <p class="avatar__desc">
                  Gerente de Operações e Consultora Gestão em Saúde
                </p>
              </div>
            </div>
          </div>
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/trb-3.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Leonardo Fernandes</p>
                <p class="avatar__desc">Consultor GRC</p>
              </div>
            </div>
          </div>
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/trb-4.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Kelly Scofield</p>
                <p class="avatar__desc">Consultora em Gestão da Qualidade</p>
              </div>
            </div>
          </div>
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/trb-5.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Fernanda Alves</p>
                <p class="avatar__desc">Consultora em Gestão da Qualidade</p>
              </div>
            </div>
          </div>
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/trb-6.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Daniele Guedes</p>
                <p class="avatar__desc">
                  Diretora Executiva e Consultora Gestão em Saúde
                </p>
              </div>
            </div>
          </div>
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/trb-7.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Amanda Parreira</p>
                <p class="avatar__desc">Pedagoga</p>
              </div>
            </div>
          </div>
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/trb-8.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Amanda Marçal</p>
                <p class="avatar__desc">Consultora em Gestão da Qualidade</p>
              </div>
            </div>
          </div>
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/trb-9.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Cláudio Amaral</p>
                <p class="avatar__desc">Consultor GRC</p>
              </div>
            </div>
          </div>
          <div class="testimonials__card">
            <div class="avatar">
              <div class="avatar__img">
                <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/trb-9.webp" alt />
              </div>
              <div class="avatar__infos">
                <p class="avatar__title">Valéria Fonseca</p>
                <p class="avatar__desc">
                  Consultora Médica em Gestão da Qualidade
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="arrows">
          <div class="prev-hero">
            <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/arrow.svg" alt />
          </div>
          <div class="next-hero">
            <img src="<?php echo get_template_directory_uri(); ?>/res/img/assets/arrow.svg" alt />
          </div>
        </div>
      </section>
    </section>
    <section class="faq">
      <div class="faq__container">
        <div class="tag"><p class="tag__text">faq</p></div>
        <h3 class="default__title">Perguntas mais frequentes</h3>
        <div class="faq__content">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  Quais são as modalidades de serviços ofertados?
                </button>
              </h2>
              <div
                id="collapseOne"
                class="accordion-collapse collapse"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  A Transforma Saúde oferece diversas modalidades de serviços
                  para atender às variadas necessidades de seus clientes. Nossas
                  abordagens flexíveis garantem que possamos proporcionar
                  soluções sob medida, adaptadas às demandas específicas de cada
                  situação, que incluem:<br /><br />
                  <b>Consultoria Presencial</b>: oferecemos consultoria
                  diretamente nas instalações do cliente, permitindo interações
                  pessoais e análises in loco para identificar áreas de
                  melhoria;<br />
                  <b>Consultoria a Distância</b>: utilizamos tecnologia para
                  fornecer orientação e suporte remotos, permitindo que os
                  clientes aproveitem nossa expertise de onde estiverem;<br />
                  <b> Consultoria Híbrida</b>: combinamos abordagens presenciais
                  e remotas para oferecer flexibilidade e eficácia,
                  adaptando-nos às preferências e necessidades individuais.<br /><br />
                  Além disso, a Transforma Saúde investe na capacitação de
                  equipes, oferecendo treinamentos em diferentes modalidades:
                  <br /><br />
                  <b>Treinamentos Incompany</b>: desenvolvemos programas de
                  treinamento personalizados para equipes, podendo acontecer
                  dentro das próprias instalações da organização ou a distância,
                  focando nas necessidades específicas de cada cliente;<br />
                  <b>Treinamento Individual</b>: oferecemos treinamento
                  personalizado para profissionais que desejam aprimorar suas
                  habilidades de maneira individualizada;<br />
                  <b>Treinamento a Distância</b>: disponibilizamos programas de
                  treinamento online, em nossa plataforma EaD, permitindo que os
                  participantes acessem conteúdo valioso de qualquer lugar.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                  Por que a Transforma Saúde tem o melhor custo-benefício?
                </button>
              </h2>
              <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  A Transforma Saúde oferece a melhor relação custo-benefício
                  devido à especialização em gestão da saúde, foco na melhoria
                  de processos e qualidade, agilidade na implementação, soluções
                  personalizadas e retorno sobre o investimento.<br /><br />
                  Nossa maior preocupação é com os resultados que a implantação
                  do sistema de gestão da qualidade gera para os nossos
                  clientes. Elaboramos os projetos pensando em custo, eficiência
                  e prazo. <br /><br />Investir em consultoria é fazer um
                  investimento estratégico que gera resultados, eficiência e
                  excelência.<br /><br />
                  Escolher a Transforma Saúde como parceira de consultoria
                  representa um investimento que tem o potencial de gerar
                  retornos substanciais, fazendo com que o custo-benefício seja
                  mais do que justificado. Nossa meta é o sucesso dos nossos
                  clientes!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>


  <?php get_footer("lp"); ?>