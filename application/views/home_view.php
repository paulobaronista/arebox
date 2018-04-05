 <!-- ##### Slider Topo ##### -->
  <div class="slider">
    <ul class="slides">

      <li>
        <img class="responsive-img imgDesktop" src="<?= base_url(); ?>assets/images/banner_camcaba_home.jpg" alt="Caçambas"> <!-- random image -->
        <img class="responsive-img" src="<?= base_url(); ?>assets/images/banner_camcaba_home_mobile.jpg" alt="Caçambas">
        <div class="caption center-align">
            <div class="col s12 m6">
              <div class="card">
                <div class="card-content">
                  <span class="card-title">Caçamba</span>
                  <p>A AREBOX foi uma das empresas pioneiras na prestação deste serviço na cidade de São Paulo.</p>
                </div>
                <div class="card-action">
                  <a class="modal-trigger waves-effect blue btn btn-caption-d" href="<?php echo base_url();?>cacambas_para_entulhos">Saiba Mais</a>
                </div>
              </div>
            </div>
        </div>
      </li>

      <li>
        <img class="responsive-img imgDesktop" src="<?= base_url(); ?>assets/images/banner_areia_pedra_home.jpg" alt="Areia / Pedra"> <!-- random image -->
        <img class="responsive-img" src="<?= base_url(); ?>assets/images/banner_areia_pedra_home_mobile.jpg" alt="Areia / Pedra">
        <div class="caption center-align">
            <div class="col s12 m6">
              <div class="card">
                <div class="card-content">
                  <span class="card-title">Areia / Pedra</span>
                  <p>Somos especializados no fornecimento de Areia Lavada e Pedra Britada.</p>
                </div>
                <div class="card-action">
                  <a class="modal-trigger waves-effect blue btn btn-caption-d" href="<?php echo base_url();?>areia_pedra_derivados">Saiba Mais</a>
                </div>
              </div>
            </div>
        </div>
      </li>

      <li>
        <img class="responsive-img imgDesktop" src="<?= base_url(); ?>assets/images/banner_agua_home.jpg" alt="Água Potável">
        <img class="responsive-img" src="<?= base_url(); ?>assets/images/banner_agua_home_mobile.jpg" alt="Água Potável">  <!-- random image -->
        <div class="caption center-align">
            <div class="col s12 m6">
              <div class="card">
                <div class="card-content">
                  <span class="card-title">Água Potável</span>
                  <p>A Água da Rocha fornece Água Potável através de caminhões pipa em diversas quantidades conforme sua necessidade.</p>
                </div>
                <div class="card-action">
                  <a class="modal-trigger waves-effect blue btn btn-caption-d" href="<?php echo base_url();?>agua_potavel_da_rocha">Saiba Mais</a>
                </div>
              </div>
            </div>
        </div>
      </li>

    </ul>
  </div>
 <!-- ##### Slider Topo ##### -->

<div id="servicos" class="scrollspy">
  <div class="container">
    <div class="section">

      <blockquote><h5>Depoimentos</h5></blockquote>

      <div class="row" style="margin-left: -0.75rem; margin-right: -0.75rem;" >

        <div class="col s12 m4">
          <div class="card-panel hoverable">
            <span class="black-text">Arebox  é nossa parceira a anos, sempre nos atendendo com um grande diferencial além do profissionalismo e competência técnica 
            de toda a equipe, é a flexibilidade em adequar necessidades da minha empresa, sempre com ótimo custo-beneficio.<br/> 
            <i>Paulo Roberto - Construvel</i> 
            </span>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card-panel hoverable">
            <span class="black-text">Preço e agilidade faz da Arebox um dos melhores parceiros nossos de caçamba, areia e pedra em nossos projetos. 
              Isto ajuda a planejar com ótimo custo-beneficio, economizando e ainda mais sabendo da consciência ambiental que a empresa leva a serio.<br/> 
              <i>Diego Viriato - Audaxco</i>  
            </span>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card-panel hoverable">
            <span class="black-text">Com a Agua da Rocha consegui economizar até 20% da conta de agua do restaurante. 
              Além de um caminhão grande posso contar com um outro caminhão menor com uma logística rápida para suprir minhas necessidades. Recomendo!<br/> 
              <i>Sérgio Santos - Sushi Kóia</i>
            </span>
          </div>
        </div>
  
      </div>

    </div>
  </div>
</div>

<div id="regioes-atendidas" class="maps scrollspy">

  <div class="video-container mapss">
    <iframe src="https://www.google.com/maps/d/embed?mid=15N73YhMhkyqb2Iyu81j_sZ5PviU&hl=pt-BR" width="100%" height="100%"></iframe>
  </div>

  <div class="container">
   <div class="row">
        <div class="col l7 s12">
          <p>Atendemos a diversas regiões da Cidade de São Paulo e Municípios próximos, veja a relação completa no canto superior esquerdo do mapa.<br/>
            Caso tenha dúvidas quanto ao atendimento ou seu bairro ou zona favor entrar em contato através do Fale Conosco! </p>
        </div>
    </div>    
  </div>

</div>

<div id="fale-conosco" class="container scrollspy">
 <div class="section">
    <blockquote><h5>Fale Conosco</h5></blockquote>
        <form method="post" class="col s12" action="<?php echo base_url("contato")?>">
            <div class="row">

                <div class="input-field col s12 m6 icone-mobile">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="nome" type="text" class="validate nome" name="nome" value="Digite seu nome aqui"/>
                  <label for="nome" class="active" data-error="erro" data-success="correto">Nome</label>
                </div>

                <div class="input-field col s12 m6 icone-mobile">
                  <i class="material-icons prefix">email</i>
                  <input id="email" type="email" class="validate email" name="email" value="Digite seu e-mail aqui"/>
                  <label for="email" data-error="erro" data-success="correto">Email</label>
                </div>          

                <div class="input-field col s12 m6 icone-mobile">
                  <i class="material-icons prefix">phone</i>
                  <input id="telefone" type="tel" class="validate telefone" name="phone" value="Digite seu telefone aqui"/>
                  <label for="telefone" data-error="erro" data-success="correto">Telefone</label>
                </div>

                <div class="input-field col s12 m6 icone-mobile">
                  <i class="material-icons prefix">settings</i>
                  <select id="form-select" class="servicos" multiple name="servicos">
                    <option value="" disabled selected>Escolha um serviço</option>
                    <option value="Areia / Pedra">Areia / Pedra</option>
                    <option value="Caçambas">Caçambas</option>
                    <option value="Água Potável">Água Potável</option>
                  </select>
                </div>

                <div class="input-field col s12 icone-mobile">
                  <i class="material-icons prefix icone-mobile">mode_edit</i>
                  <label for="form-mensagem" data-error="erro" data-success="correto">Mensagem</label>
                  <textarea id="form-mensagem" class="materialize-textarea msg" cols="60" rows="10" name="mss" value="Digite sua mensagem aqui">Digite sua mensagem aqui</textarea>
                </div>

                <button type="submit" class="btn_enviar waves-effect waves-teal blue darken-1 btn right enviar" title="enviar" name="enviar_email" value="enviar"><i class="material-icons right">label</i>Enviar</button>
                <button type="reset" class="btn_limpar waves-effect waves-teal  btn left enviar" title="limpar"><i class="material-icons left">label</i>limpar</button>
            </div>            
        </form>
 </div>
</div>
<?php 
if(isset($email_enviado))
    echo $email_enviado;
?>