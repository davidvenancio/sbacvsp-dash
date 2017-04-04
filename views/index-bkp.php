<!DOCTYPE html>
<html>
    <head>
        <title>Pesquisa Exposição a Radiação Ionizante</title>

        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="<?= APP_URI_TEMPLATES ?>/css/style.css">

        <link rel="stylesheet" href="<?= APP_URI_TEMPLATES ?>/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


        <style>
            body {font-family: 'Montserrat', sans-serif; font-size: 14px;}
            input[type="text"] {width: 85%; padding: 1%;}
            select {padding: 1%;}
            textarea {width: 85%; height: 85px;}

            #conteudo {width: 80%; margin: 0 auto;}

            .titulo-grande {background-color: #673ab7; color: #ffffff; font-size: 1.5em; padding: 1%; text-align: center; margin-bottom: 1%}

            .div-linhas {padding-bottom: 2%;}
            .label-campos {background-color: #efedf2; padding: 1%; margin-bottom: 1%;}
        </style>

    </head>
    <body>
        
        <div id="conteudo">

            <form name="form" method="post" action="<?= APP_URI ?>/save-quest">

                <div class="titulo-grande">Pesquisa Exposição a Radiação Ionizante</div>

                <div class="div-linhas">
                    <div class="label-campos"> NOME * </div>
                    <div> <input type="text" name="1" value="" required> </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> CRM * </div>
                    <div> <input type="text" name="2" value="" required> </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> DATA DE NASCIMENTO * </div>
                    <div> 
                        <select name="3[]">
                            <?php for($data_nasc = 1; $data_nasc <= 31; $data_nasc++){ ?>
                                <option value="<?= $data_nasc ?>"><?= $data_nasc ?></option>
                            <?php } ?>
                        </select>
                        /
                        <select name="3[]">
                            <?php for($mes_nasc = 1; $mes_nasc <= 12; $mes_nasc++){ ?>
                                <option value="<?= $mes_nasc ?>"><?= $mes_nasc ?></option>
                            <?php } ?>
                        </select>
                        /
                        <select name="3[]">
                            <?php for($ano_nasc = 1900;$ano_nasc <= date('Y'); $ano_nasc++){ ?>
                                <option value="<?= $ano_nasc ?>"><?= $ano_nasc ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> Sexo </div>
                    <div> 
                        <input type="radio" name="4" value="M"> M   <br>
                        <input type="radio" name="4" value="F"> F    <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> CIDADE QUE TRABALHA </div>
                    <div> <input type="text" name="5" value=""> </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> REALIZA PROCEDIMENTO ENDOVASCULAR * </div>
                    <div> 
                        <input type="radio" name="6" value="Sim"> Sim    <br>
                        <input type="radio" name="6" value="Não"> Não    <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> HÁ QUANTO TEMPO </div>
                    <div> 
                        <input type="radio" name="7" value="< 2 anos"> < 2 anos   <br>
                        <input type="radio" name="7" value="< 5 anos"> < 5 anos   <br>
                        <input type="radio" name="7" value="< 10 anos"> < 10 anos    <br>
                        <input type="radio" name="7" value="< 20"> < 20   <br>
                        <input type="radio" name="7" value="> 20"> > 20   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> QUANTOS POR MÊS </div>
                    <div> 
                        <input type="radio" name="8" value="ATÉ 5"> ATÉ 5    <br>
                        <input type="radio" name="8" value="5 - 10"> 5 - 10    <br>
                        <input type="radio" name="8" value="10-20"> 10-20    <br>
                        <input type="radio" name="8" value="> 20"> > 20   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> COMENTÁRIO / OBSERVAÇÃO 1 </div>
                    <div> 
                        <textarea name="9"></textarea> 
                    </div>
                </div>


                <div class="div-linhas">
                    <div class="label-campos"> ANGIOPLASTIA E STENT PERIFÉRICO </div>
                    <div> 
                        <input type="checkbox" name="10" value="Sim"> Sim 
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> ANGIOPLASTIA E STENT CAROTÍDEO </div>
                    <div> 
                        <input type="checkbox" name="11" value="Sim"> Sim 
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> EMBOLIZAÇÃO DE MAV </div>
                    <div> 
                        <input type="checkbox" name="12" value="Sim"> Sim 
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> ANEURISMA TORÁCICO </div>
                    <div> 
                        <input type="checkbox" name="13" value="Sim"> Sim 
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> DISSECÇÃO DE AORTA </div>
                    <div> 
                        <input type="checkbox" name="14" value="Sim"> Sim 
                    </div>
                </div>

                <div class="div-linhas">
                <div class="label-campos"> ANEURISMA TORACO-ABOMINAL </div>
                <div> 
                    <input type="checkbox" name="15[]" value="NÃO"> NÃO   <br>
                    <input type="checkbox" name="15[]" value="SIM RAMIFICADA"> SIM RAMIFICADA   <br>
                    <input type="checkbox" name="15[]" value="SIM FENESTRADA"> SIM FENESTRADA   <br>
                    <input type="checkbox" name="15[]" value="SIM CHAMINÉ/SANDWICHE"> SIM CHAMINÉ/SANDWICHE   <br>
                    <input type="checkbox" name="15[]" value="COM PROCTOR"> COM PROCTOR   <br>
                    <input type="checkbox" name="15[]" value="SEM PROCTOR"> SEM PROCTOR   <br>
                </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> Comentario / Observação 2 </div>
                    <div> 
                        <textarea name="16"></textarea> 
                    </div>
                </div>

                <div class="titulo-grande">SERVIÇOS QUE TRABALHA</div>
                <div style="background-color: #673ab7; color: #ffffff; font-size: 1.3em; padding: 1%; text-align: center; margin-bottom: 1%">RECURSOS E PROTEÇÃO</div>

                <div class="div-linhas">
                    <div class="label-campos"> NÚMERO DE HOSPITAIS QUE FAZ PROCEDIMENTOS ENDOVASCULARES </div>
                    <div> 
                        <select name="17">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value=">5">>5</option>
                        </select>
                    </div>
                </div>


                <div class="titulo-grande">RELATIVO AOS 3 SERVIÇOS QUE MAIS FREQUENTA</div>

                <div class="div-linhas">
                    <div class="label-campos"> HOSPITAL 1 </div>
                    <div> 
                        <input type="checkbox" name="18[]" value="ARCO CIRURGICO"> ARCO CIRURGICO   <br>
                        <input type="checkbox" name="18[]" value="HEMODINAMICA FIXA"> HEMODINAMICA FIXA   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> HOSP 1 ANO DE FABRICAÇÃO </div>
                    <div> 
                        <select name="19[]">
                            <?php for($data_nasc = 1; $data_nasc <= 31; $data_nasc++){ ?>
                                <option value="<?= $data_nasc ?>"><?= $data_nasc ?></option>
                            <?php } ?>
                        </select>
                        /
                        <select name="19[]">
                            <?php for($mes_nasc = 1; $mes_nasc <= 12; $mes_nasc++){ ?>
                                <option value="<?= $mes_nasc ?>"><?= $mes_nasc ?></option>
                            <?php } ?>
                        </select>
                        /
                        <select name="19[]">
                            <?php for($ano_nasc = 1900;$ano_nasc <= date('Y'); $ano_nasc++){ ?>
                                <option value="<?= $ano_nasc ?>"><?= $ano_nasc ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> HOSPITAL 1 </div>
                    <div> 
                        <input type="radio" name="20" value="MANUTENÇÃO DO APARELHO ANUAL"> MANUTENÇÃO DO APARELHO ANUAL   <br>
                        <input type="radio" name="20" value="SEMESTRAL"> SEMESTRAL   <br>
                        <input type="radio" name="20" value="NÃO FAZ"> NÃO FAZ   <br>
                        <input type="radio" name="20" value="DESCONHECIDO"> DESCONHECIDO   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> HOSPITAL 1 SISTEMA DE PROTEÇÃO DISPONÍVEL </div>
                    <div> 
                        <input type="checkbox" name="21[]" value="AVENTAL DE CHUMBO COM MAUTENÇÃO FREQUENTE"> AVENTAL DE CHUMBO COM MAUTENÇÃO FREQUENTE   <br>
                        <input type="checkbox" name="21[]" value="AVENTAL DE CHUMBO SEM MAUTENÇÃO FREQUENTE"> AVENTAL DE CHUMBO SEM MAUTENÇÃO FREQUENTE  <br>
                        <input type="checkbox" name="21[]" value="ÓCULOS DE PROTEÇÃO CONTRA RADIAÇÃO"> ÓCULOS DE PROTEÇÃO CONTRA RADIAÇÃO   <br>
                        <input type="checkbox" name="21[]" value="GORRO DE PROTEÇÃO CONTRA RADIAÇÃO"> GORRO DE PROTEÇÃO CONTRA RADIAÇÃO  <br>
                        <input type="checkbox" name="21[]" value="ESCUDO DE PROTEÇÃO SOBRE A MESA DE TRABALHO"> ESCUDO DE PROTEÇÃO SOBRE A MESA DE TRABALHO  <br>
                        <input type="checkbox" name="21[]" value="SAIOTE DE PROTEÇÃO SOB A MESA DE TRABALHO"> SAIOTE DE PROTEÇÃO SOB A MESA DE TRABALHO  <br>
                        <input type="checkbox" name="21[]" value="DOSÍMETRO PARA RADIAÇÃO"> DOSÍMETRO PARA RADIAÇÃO   <br>
                    </div>
                </div>


                <div class="div-linhas">
                    <div class="label-campos"> HOSPITAL 2 </div>
                    <div> 
                        <input type="checkbox" name="22[]" value="ARCO CIRURGICO"> ARCO CIRURGICO   <br>
                        <input type="checkbox" name="22[]" value="HEMODINAMICA FIXA"> HEMODINAMICA FIXA   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> HOSP 2 ANO DE FABRICAÇÃO </div>
                    <div> 
                        <select name="23[]">
                            <?php for($data_nasc = 1; $data_nasc <= 31; $data_nasc++){ ?>
                                <option value="<?= $data_nasc ?>"><?= $data_nasc ?></option>
                            <?php } ?>
                        </select>
                        /
                        <select name="23[]">
                            <?php for($mes_nasc = 1; $mes_nasc <= 12; $mes_nasc++){ ?>
                                <option value="<?= $mes_nasc ?>"><?= $mes_nasc ?></option>
                            <?php } ?>
                        </select>
                        /
                        <select name="23[]">
                            <?php for($ano_nasc = 1900;$ano_nasc <= date('Y'); $ano_nasc++){ ?>
                                <option value="<?= $ano_nasc ?>"><?= $ano_nasc ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> HOSPITAL 2 </div>
                    <div> 
                        <input type="radio" name="24" value="MANUTENÇÃO DO APARELHO ANUAL"> MANUTENÇÃO DO APARELHO ANUAL   <br>
                        <input type="radio" name="24" value="SEMESTRAL"> SEMESTRAL   <br>
                        <input type="radio" name="24" value="NÃO FAZ"> NÃO FAZ   <br>
                        <input type="radio" name="24" value="DESCONHECIDO"> DESCONHECIDO   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> HOSPITAL 2 SISTEMA DE PROTEÇÃO DISPONÍVEL </div>
                    <div> 
                        <input type="checkbox" name="25[]" value="AVENTAL DE CHUMBO COM MAUTENÇÃO FREQUENTE"> AVENTAL DE CHUMBO COM MAUTENÇÃO FREQUENTE   <br>
                        <input type="checkbox" name="25[]" value="AVENTAL DE CHUMBO SEM MAUTENÇÃO FREQUENTE"> AVENTAL DE CHUMBO SEM MAUTENÇÃO FREQUENTE  <br>
                        <input type="checkbox" name="25[]" value="ÓCULOS DE PROTEÇÃO CONTRA RADIAÇÃO"> ÓCULOS DE PROTEÇÃO CONTRA RADIAÇÃO  <br>
                        <input type="checkbox" name="25[]" value="GORRO DE PROTEÇÃO CONTRA RADIAÇÃO"> GORRO DE PROTEÇÃO CONTRA RADIAÇÃO  <br>
                        <input type="checkbox" name="25[]" value="ESCUDO DE PROTEÇÃO SOBRE A MESA DE TRABALHO"> ESCUDO DE PROTEÇÃO SOBRE A MESA DE TRABALHO  <br>
                        <input type="checkbox" name="25[]" value="SAIOTE DE PROTEÇÃO SOB A MESA DE TRABALHO"> SAIOTE DE PROTEÇÃO SOB A MESA DE TRABALHO  <br>
                        <input type="checkbox" name="25[]" value="DOSÍMETRO PARA RADIAÇÃO"> DOSÍMETRO PARA RADIAÇÃO   <br>
                    </div>
                </div>


                <div class="div-linhas">
                    <div class="label-campos"> HOSPITAL 3 </div>
                    <div> 
                        <input type="checkbox" name="26[]" value="ARCO CIRURGICO"> ARCO CIRURGICO   <br>
                        <input type="checkbox" name="26[]" value="HEMODINAMICA FIXA"> HEMODINAMICA FIXA   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> HOSP 3 ANO DE FABRICAÇÃO </div>
                    <div> 
                        <select name="27[]">
                            <?php for($data_nasc = 1; $data_nasc <= 31; $data_nasc++){ ?>
                                <option value="<?= $data_nasc ?>"><?= $data_nasc ?></option>
                            <?php } ?>
                        </select>
                        /
                        <select name="27[]">
                            <?php for($mes_nasc = 1; $mes_nasc <= 12; $mes_nasc++){ ?>
                                <option value="<?= $mes_nasc ?>"><?= $mes_nasc ?></option>
                            <?php } ?>
                        </select>
                        /
                        <select name="27[]">
                            <?php for($ano_nasc = 1900;$ano_nasc <= date('Y'); $ano_nasc++){ ?>
                                <option value="<?= $ano_nasc ?>"><?= $ano_nasc ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> HOSPITAL 3 </div>
                    <div> 
                        <input type="radio" name="28" value="MANUTENÇÃO DO APARELHO ANUAL"> MANUTENÇÃO DO APARELHO ANUAL   <br>
                        <input type="radio" name="28" value="SEMESTRAL"> SEMESTRAL   <br>
                        <input type="radio" name="28" value="NÃO FAZ"> NÃO FAZ   <br>
                        <input type="radio" name="28" value="DESCONHECIDO"> DESCONHECIDO   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> HOSPITAL 3 SISTEMA DE PROTEÇÃO DISPONÍVEL </div>
                    <div> 
                        <input type="checkbox" name="29[]" value="AVENTAL DE CHUMBO COM MAUTENÇÃO FREQUENTE"> AVENTAL DE CHUMBO COM MAUTENÇÃO FREQUENTE   <br>
                        <input type="checkbox" name="29[]" value="AVENTAL DE CHUMBO SEM MAUTENÇÃO FREQUENTE"> AVENTAL DE CHUMBO SEM MAUTENÇÃO FREQUENTE   <br>
                        <input type="checkbox" name="29[]" value="ÓCULOS DE PROTEÇÃO CONTRA RADIAÇÃO"> ÓCULOS DE PROTEÇÃO CONTRA RADIAÇÃO   <br>
                        <input type="checkbox" name="29[]" value="GORRO DE PROTEÇÃO CONTRA RADIAÇÃO"> GORRO DE PROTEÇÃO CONTRA RADIAÇÃO   <br>
                        <input type="checkbox" name="29[]" value="ESCUDO DE PROTEÇÃO SOBRE A MESA DE TRABALHO"> ESCUDO DE PROTEÇÃO SOBRE A MESA DE TRABALHO   <br>
                        <input type="checkbox" name="29[]" value="SAIOTE DE PROTEÇÃO SOB A MESA DE TRABALHO"> SAIOTE DE PROTEÇÃO SOB A MESA DE TRABALHO   <br>
                        <input type="checkbox" name="29[]" value="DOSÍMETRO PARA RADIAÇÃO"> DOSÍMETRO PARA RADIAÇÃO   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> ATUA COMO PROCTOR EM OUTRAS CIDADES / SERVIÇOS </div>
                    <div> 
                        <input type="radio" name="30" value="NÃO"> NÃO   <br>
                        <input type="radio" name="30" value="SIM SEMANALMENTE"> SIM SEMANALMENTE   <br>
                        <input type="radio" name="30" value="SIM MENSALMENTE"> SIM MENSALMENTE   <br>
                        <input type="radio" name="30" value="RARAMENTE"> RARAMENTE   <br>
                    </div>
                </div>


                <div class="div-linhas">
                    <div class="label-campos"> COMENTÁRIO / OBSERVAÇÃO 3 </div>
                    <div> 
                        <textarea name="31"></textarea>
                    </div>
                </div>


                <div class="titulo-grande">MATERIAL DE PROTEÇÃO INDIVIDUAL</div>

                <div class="div-linhas">
                    <div class="label-campos"> USA CONSTANTEMENTE DURANTE OS PROCEDIMENTOS </div>
                    <div> 
                        <input type="checkbox" name="32[]" value="AVENTAL QUE COBRE A PARTE DA FRENTE E DAS COSTAS DO USUÁRIO"> AVENTAL QUE COBRE A PARTE DA FRENTE E DAS COSTAS DO USUÁRIO   <br>
                        <input type="checkbox" name="32[]" value="AVENTAL COBRE SOMENTE A PARTE DA FRENTE"> AVENTAL COBRE SOMENTE A PARTE DA FRENTE   <br>
                        <input type="checkbox" name="32[]" value="GORRO DE PROTEÇÃO"> GORRO DE PROTEÇÃO   <br>
                        <input type="checkbox" name="32[]" value="PROTETOR DE TIREÓIDE"> PROTETOR DE TIREÓIDE    <br>
                        <input type="checkbox" name="32[]" value="ÓCULOS PLUMBADO OU VISEIRA PROTETORA"> ÓCULOS PLUMBADO OU VISEIRA PROTETORA   <br>
                        <input type="checkbox" name="32[]" value="ÓCULOS TENHO DISPONÍVEL MAS USO DE MANEIRA IRREGULAR"> ÓCULOS TENHO DISPONÍVEL MAS USO DE MANEIRA IRREGULAR  <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> QUANTO AO AVENTAL </div>
                    <div> 
                        <input type="checkbox" name="33[]" value="PRÓPRIO"> PRÓPRIO   <br>
                        <input type="checkbox" name="33[]" value="HOSPITAL"> HOSPITAL   <br>
                        <input type="checkbox" name="33[]" value="CHUMBO"> CHUMBO   <br>
                        <input type="checkbox" name="33[]" value="TUNGSTÊNIO"> TUNGSTÊNIO   <br>
                        <input type="checkbox" name="33[]" value="RENOVADO ANUALMENTE"> RENOVADO ANUALMENTE   <br>
                        <input type="checkbox" name="33[]" value="FAÇO MANUTENÇÃO ADEQUADA COM AVALIAÇÃO SEMESTRAL"> FAÇO MANUTENÇÃO ADEQUADA COM AVALIAÇÃO SEMESTRAL   <br>
                        <input type="checkbox" name="33[]" value="USO COLETIVO SEM MANUTENÇÃO OU RENOVAÇÃO"> USO COLETIVO SEM MANUTENÇÃO OU RENOVAÇÃO    <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> PROTEÇÃO COLETIVA - ESCUDO </div>
                    <div> 
                        <input type="radio" name="34" value="USO ESCUDO DE ANTEPARO SOBRE A MESA CONSTANTEMENTE"> USO ESCUDO DE ANTEPARO SOBRE A MESA CONSTANTEMENTE   <br>
                        <input type="radio" name="34" value="USO ESCUDO DE ANTEPARO SOBRE A MESA RARAMENTE"> USO ESCUDO DE ANTEPARO SOBRE A MESA RARAMENTE   <br>
                        <input type="radio" name="34" value="USO ESCUDO DE ANTEPARO SOBRE A MESA MAS NÃO É DISPONÍVEL EM TODOS OS SERVIÇOS"> USO ESCUDO DE ANTEPARO SOBRE A MESA MAS NÃO É DISPONÍVEL EM TODOS OS SERVIÇOS   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> PROTEÇÃO COLETIVA - SAIOTE </div>
                    <div> 
                        <input type="radio" name="35" value="USO SAIOTE DE ANTEPARO SOB A MESA CONSTANTEMENTE"> USO SAIOTE DE ANTEPARO SOB A MESA CONSTANTEMENTE   <br>
                        <input type="radio" name="35" value="USO SAIOTE DE ANTEPARO SOB A MESA RARAMENTE"> USO SAIOTE DE ANTEPARO SOB A MESA RARAMENTE   <br>
                        <input type="radio" name="35" value="USARIA SAIOTE DE ANTEPARO SOB A MESA MAS NÃO É DISPONÍVEL EM TODOS OS SERVIÇOS"> USARIA SAIOTE DE ANTEPARO SOB A MESA MAS NÃO É DISPONÍVEL EM TODOS OS SERVIÇOS   <br>
                        <input type="radio" name="35" value="NÃO TENHO DISPONÍVEL"> NÃO TENHO DISPONÍVEL  <br> 
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> COMENTÁRIO / OBSERVAÇÃO 4 </div>
                    <div> 
                        <textarea name="36"></textarea>
                    </div>
                </div>

                <div class="titulo-grande">DOSÍMETRO</div>

                <div class="div-linhas">
                    <div class="label-campos"> USO DO DOSÍMETRO </div>
                    <div> 
                        <input type="checkbox" name="37[]" value="CONSTANTEMENTE EM TODOS OS SERVIÇOS"> CONSTANTEMENTE EM TODOS OS SERVIÇOS   <br>
                        <input type="checkbox" name="37[]" value="RARAMENTE POIS NÃO ESTÁ DISPONÍVEL"> RARAMENTE POIS NÃO ESTÁ DISPONÍVEL   <br>
                        <input type="checkbox" name="37[]" value="RARAMENTE POR EXCEDER O LIMITE DE RADIAÇÃO E ISTO IMPEDIRIA DE TRABALHAR"> RARAMENTE POR EXCEDER O LIMITE DE RADIAÇÃO E ISTO IMPEDIRIA DE TRABALHAR   <br>
                        <input type="checkbox" name="37[]" value="MÉDICO ASSISTENTES DA EQUIPE UTILIZAM"> MÉDICO ASSISTENTES DA EQUIPE UTILIZAM   <br>
                        <input type="checkbox" name="37[]" value="INSTRUMENTADOR UTILIZA"> INSTRUMENTADOR UTILIZA  <br>
                        <input type="checkbox" name="37[]" value="MÉDICO ASSISTENTES DA EQUIPE NÃO UTILIZAM"> MÉDICO ASSISTENTES DA EQUIPE NÃO UTILIZAM   <br>
                        <input type="checkbox" name="37[]" value="INSTRUMENTADOR NÃO UTILIZA"> INSTRUMENTADOR NÃO UTILIZA   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> DOSAGEM DO DOSÍMETRO NO ÚLTIMO RELATÓRIO </div>
                    <div> 
                        <textarea name="38"></textarea>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> SOMATÓRIA DA DOSAGEM DO DOSÍMETRO DOS DIVERSOS SERVIÇOS </div>
                    <div> 
                        <textarea name="39"></textarea>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> LEITURA DO DOSÍMETRO </div>
                    <div> 
                        <input type="checkbox" name="40[]" value="NUNCA SOMOU OS RESULTADOS"> NUNCA SOMOU OS RESULTADOS   <br>
                        <input type="checkbox" name="40[]" value="JÁ TEVE QUE APRESENTAR HEMOGRAMA POR EXEDER LIMITE DE RADIAÇÃO EM 1 HOSPITAL"> JÁ TEVE QUE APRESENTAR HEMOGRAMA POR EXEDER LIMITE DE RADIAÇÃO EM 1 HOSPITAL   <br>
                        <input type="checkbox" name="40[]" value="JÁ FOI IMPEDIDO DE TRABALHAR POR EXEDER LIMITE DE RADIAÇÃO EM 1 HOSPITAL"> JÁ FOI IMPEDIDO DE TRABALHAR POR EXEDER LIMITE DE RADIAÇÃO EM 1 HOSPITAL   <br>
                        <input type="checkbox" name="40[]" value="QUANDO OCORRE EM UM HOSPITAL OS OUTROS SÃO INFORMADOS"> QUANDO OCORRE EM UM HOSPITAL OS OUTROS SÃO INFORMADOS   <br>
                        <input type="checkbox" name="40[]" value="OS OUTROS HOSPITAIS NÃO SÃO INFORMADOS"> OS OUTROS HOSPITAIS NÃO SÃO INFORMADOS   <br>
                        <input type="checkbox" name="40[]" value="TENHO DOSÍMETRO DE LEITURA AUTOMÁTICA"> TENHO DOSÍMETRO DE LEITURA AUTOMÁTICA   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> COMENTÁRIO / OBSERVAÇÃO 4 </div>
                    <div> 
                        <textarea name="41"></textarea>
                    </div>
                </div>


                <div class="titulo-grande">MEDIDAS DE REDUÇÃO DE RADIAÇÃO</div>
                <div style="background-color: #673ab7; color: #ffffff; font-size: 1.3em; padding: 1%; text-align: center; margin-bottom: 1%">CONHECIMENTO</div>

                <div class="div-linhas">
                    <div class="label-campos"> TEM CONHECIMENTO BÁSICO DE FÍSICA DAS RADIAÇÕES PARA O USO APROPRIADO DO EQUIPAMENTO / PROCEDIMENTO? </div>
                    <div> 
                        <input type="radio" name="42" value="Sim"> Sim  <br>
                        <input type="radio" name="42" value="Não"> Não   <br> 
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> TEM CONHECIMENTO BÁSICO DE FÍSICA DAS RADIAÇÕES PARA O USO APROPRIADO DO EQUIPAMENTO PARA POSICIONAMENTO NA SALA EM USO DE PERFIL / OBLIQUA </div>
                    <div> 
                        <input type="radio" name="43" value="Sim"> Sim   <br>
                        <input type="radio" name="43" value="Não"> Não   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> UTILIZA DE COLIMAÇÃO E FILTROS PRÓPRIA DO FEIXE PRIMÁRIO? </div>
                    <div> 
                        <input type="radio" name="44" value="Sim"> Sim   <br>
                        <input type="radio" name="44" value="Não"> Não    <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> AFASTA DO PACIENTE NA HORA DE SUBTRAÇÃO / CINE ANGIOGRAFIA </div>
                    <div> 
                        <input type="radio" name="45" value="Sim"> Sim   <br>
                        <input type="radio" name="45" value="Não"> Não   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> MANTÊM O CORPO E MÃOS DISTANTE DO FEIXE PRIMÁRIO DURANTE O PROCEDIMENTO? </div>
                    <div> 
                        <input type="radio" name="46" value="Sim"> Sim   <br>
                        <input type="radio" name="46" value="Não"> Não   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> MANTÊM A FONTE DISTANTE DO PACIENTE (> 50 CM) </div>
                    <div> 
                        <input type="radio" name="47" value="Sim"> Sim   <br>
                        <input type="radio" name="47" value="Não"> Não   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> PARTICIPARIA DE CURSO SOBRE FÍSICA E SEGURANÇA ? </div>
                    <div> 
                        <input type="radio" name="48" value="Sim"> Sim   <br>
                        <input type="radio" name="48" value="Não"> Não   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> COMENTÁRIO / OBSERVAÇÃO 5 </div>
                    <div> 
                        <textarea name="49"></textarea>
                    </div>
                </div>


                <div class="titulo-grande">DOENÇA RELACIONADA A RADIAÇÃO</div>

                <div class="div-linhas">
                    <div class="label-campos"> PREDISPOSIÇÃO GENÉTICA A DOENÇA NEOPLÁSICA ? </div>
                    <div> 
                        <input type="checkbox" name="50[]" value="PAIS TIVERAM / TEM NEOPLASIA"> PAIS TIVERAM / TEM NEOPLASIA   <br>
                        <input type="checkbox" name="50[]" value="AVÓS TIVERAM / TEM NEOPLASIA"> AVÓS TIVERAM / TEM NEOPLASIA   <br>
                         <input type="checkbox" name="50[]" value="IRMÃOS TIVERAM / TEM NEOPLASIA"> IRMÃOS TIVERAM / TEM NEOPLASIA  <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> CHECK UP </div>
                    <div> 
                        <input type="checkbox" name="51[]" value="AVALIAÇÃO CLÍNICA ANUAL"> AVALIAÇÃO CLÍNICA ANUAL   <br>
                        <input type="checkbox" name="51[]" value="VALIAÇÃO OFTÁLMICA ANUAL"> VALIAÇÃO OFTÁLMICA ANUAL   <br>
                        <input type="checkbox" name="51[]" value="HEMOGRAMA SERIADO (MENSAL / TRIMESTRAL OU SEMESTRAL)"> HEMOGRAMA SERIADO (MENSAL / TRIMESTRAL OU SEMESTRAL)   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO? </div>
                    <div> 
                        <input type="checkbox" name="52[]" value="NEOPLASIA"> NEOPLASIA  <br>  
                        <input type="checkbox" name="52[]" value="OFTÁLMICA"> OFTÁLMICA   <br>
                        <input type="checkbox" name="52[]" value="HEMATOLÓGICA"> HEMATOLÓGICA   <br>
                        <input type="checkbox" name="52[]" value="DERMATOLÓGICA"> DERMATOLÓGICA   <br>
                        <input type="checkbox" name="52[]" value="GEROU AFASTAMENTO TEMPORÁRIO"> GEROU AFASTAMENTO TEMPORÁRIO   <br>
                        <input type="checkbox" name="52[]" value="GEROU AFASTAMENTO DEFINITIVO"> GEROU AFASTAMENTO DEFINITIVO   <br>
                        <input type="checkbox" name="52[]" value="NÃO"> NÃO   <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> QUAL </div>
                    <div> 
                        <input type="text" name="53" value="">
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> ALGUÉM DA EQUIPE / COLEGA DO SERVIÇO APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO? </div>
                    <div> 
                        <input type="checkbox" name="54[]" value="NEOPLASIA"> NEOPLASIA  <br>
                        <input type="checkbox" name="54[]" value="OFTÁLMICA"> OFTÁLMICA   <br>
                        <input type="checkbox" name="54[]" value="HEMATOLÓGICA"> HEMATOLÓGICA   <br>
                        <input type="checkbox" name="54[]" value="DERMATOLÓGICA"> DERMATOLÓGICA   <br>
                        <input type="checkbox" name="54[]" value="GEROU AFASTAMENTO TEMPORÁRIO"> GEROU AFASTAMENTO TEMPORÁRIO   <br>
                        <input type="checkbox" name="54[]" value="GEROU AFASTAMENTO DEFINITIVO"> GEROU AFASTAMENTO DEFINITIVO   <br>
                        <input type="checkbox" name="54[]" value="ÓBITO POR TUMOR"> ÓBITO POR TUMOR     <br>
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> COMENTÁRIO / OBSERVAÇÃO 6 </div>
                    <div> 
                        <textarea name="55"></textarea> 
                    </div>
                </div>

                <div class="div-linhas">
                    <div class="label-campos"> COMENTÁRIO FINAL E SUGESTÕES </div>
                    <div> 
                        <textarea name="56"></textarea>
                    </div>
                </div>


                <input type="submit" value="Finalizar">


            </form>

        </div>

    </body>
</html>
