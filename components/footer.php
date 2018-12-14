        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h4>AGENDE SUA CONSULTA</h4>
                        <h2>84 4008.5909</h2>
                        <p>Ouvido - Nariz - Garganta - Olhos - Pele</p>
                    </div><!-- md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <h3>UNIDADES DE ATENDIMENTO:</h3>
                        <ul>
                            <li><a href="">Natal</a></li>
                            <li><a href="">Parnamirim</a></li>
                            <li><a href="">Mossoró</a></li>
                            <li><a href="">Caicó</a></li>
                        </ul>
                    </div><!-- md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <h3>TRABALHE CONOSCO</h3>
                            <p>Caso tenha interesse em trabalhar com a gente é só cadastrar aqui seus dados e seu currículo.</p>
                        </a>
                    </div><!-- md-4 -->
                </div><!-- row -->
            </div><!-- container -->
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Trabalhe Conosco</h4>
                    </div>
                    <div class="modal-body">
                        <form action="enviar-curriculum" method="POST" id="trabalheform" enctype="multipart/form-data">
                            <label for="nome">
                                Nome
                                <input type="text" name="nome" id="nome" />
                            </label>

                            <label for="email">
                                E-mail
                                <input type="text" name="email" id="email" />
                            </label>

                            <label for="area">
                                Área de interesse
                                <select name="area" id="area">
                                    <option value="Financeiro">Financeiro</option>
                                    <option value="Faturamento">Faturamento</option>
                                    <option value="Recursos Humanos">Recursos Humanos</option>
                                    <option value="Call Center">Call Center</option>
                                    <option value="Recepção">Recepção</option>
                                    <option value="Auxiliar de serviços gerais">Auxiliar de serviços gerais</option>
                                    <option value="Administrativo">Administrativo</option>
                                    <option value="Técnico em enfermagem">Técnico em enfermagem</option>
                                    <option value="Enfermagem">Enfermagem</option>
                                    <option value="Nutricionista">Nutricionista</option>
                                    <option value="Fonoaudiólogo">Fonoaudiólogo</option>
                                    <option value="Tecnologia da Informação (T.I.)">Tecnologia da Informação (T.I.)</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Fisioterapeuta">Fisioterapeuta</option>
                                    <option value="Estágios">Estágios</option>
                                    <option value="Menor Aprendiz">Menor Aprendiz</option>
                                </select>
                            </label>

                            <label for="mensagem">
                                Mensagem
                                <textarea name="mensagem" id="mensagem"></textarea>
                            </label>

                            <label for="arquivo">
                                Arquivo
                                <input type="file" name="arquivo" id="arquivo" />
                            </label>
                            <button id="calcularPiso" class="remodal-confirm">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script type='text/javascript' src='assets/js/jquery.js'></script>
        <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
        <script src="https://use.fontawesome.com/6963733f46.js"></script>
        <script type='text/javascript' src='assets/js/owl.carousel.min.js'></script>
        <script type='text/javascript' src='assets/js/script.js'></script>
    </body>
</html>