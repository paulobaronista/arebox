<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a class="<?php echo (isset($cacambas_para_entulhos))?$cacambas_para_entulhos:"";?>" href="<?php echo base_url();?>cacambas_para_entulhos">Caçambas</a></li>
  <li><a class="<?php echo (isset($areia_pedra_derivados))?$areia_pedra_derivados:"";?>" href="<?php echo base_url();?>areia_pedra_derivados">Areia / Pedra</a></li>
  <li><a class="<?php echo (isset($agua_potavel_da_rocha))?$agua_potavel_da_rocha:"";?>" href="<?php echo base_url();?>agua_potavel_da_rocha">Água Potável</a></li>
</ul>
<nav>
  <div class="nav-wrapper container">
    <a id="logo-container" href="<?php echo base_url();?>home" class="brand-logo"><img src="<?= base_url(); ?>assets/images/logo-arebox.png" alt=""></a>
    
    <div class="box-phone">
     <a id="alphaPhone" href="" onclick="ga('send', 'event', 'Telefone clicado','click', 'Telefone clicado');" title="clique para ver o telefone">
       <i class="material-icons">phone</i>
       <p>Clique <span><em>aqui</em></span> para ver o telefone</p>
     </a>
    </div>

    <ul class="right hide-on-med-and-down">
      <li><a class="<?php echo (isset($quem_somos))?$quem_somos:"";?>" href="<?php echo base_url();?>quem_somos">Quem Somos</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Nossos Serviços<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="http://arebox.com.br/#regioes-atendidas">Regiões Atendidas</a></li>
      <li><a href="http://arebox.com.br/#fale-conosco">Fale Conosco</a></li>
    </ul>

    <ul id="nav-mobile" class="side-nav">
      <li><a class="<?php echo (isset($quem_somos))?$quem_somos:"";?>" href="<?php echo base_url();?>quem_somos">Quem Somos</a></li>
      <li><a href="http://arebox.com.br/#regioes-atendidas">Regiões Atendidas</a></li>
      <li><a class="<?php echo (isset($cacambas_para_entulhos))?$cacambas_para_entulhos:"";?>" href="<?php echo base_url();?>cacambas_para_entulhos">Caçambas</a></li>
      <li><a class="<?php echo (isset($areia_pedra_derivados))?$areia_pedra_derivados:"";?>" href="<?php echo base_url();?>areia_pedra_derivados">Areia / Pedra</a></li>
      <li><a class="<?php echo (isset($agua_potavel_da_rocha))?$agua_potavel_da_rocha:"";?>" href="<?php echo base_url();?>agua_potavel_da_rocha">Água Potável</a></li>
      <li><a href="http://arebox.com.br/#fale-conosco">Fale Conosco</a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

  </div>
</nav>
</header>