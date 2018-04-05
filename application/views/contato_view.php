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
                  <select id="form-select" multiple name="servicos">
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