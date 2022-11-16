<!DOCTYPE html>
<html>
    <!--
		Disciplina: Linguagens de Programação III
		Tarefa: Semana 3 - Tarefa avaliativa - Organizando e estruturando o site com PHP
		Data: 19/04/2022
	-->
    <head>
        <meta charset="utf-8">
        <title>Recomendações de livros - Livros</title>
        <link rel="stylesheet" href="estilo.css" type="text/css">
    </head>
    <body>
        <?php
            include("topo.php");        
        ?>

        <main>
            <section>
                <h2>Ficarei feliz com seu contato!</h2>
            </section>

            <fieldset>
                <legend>Envie sua mensagem logo abaixo!</legend>

                <form action="dados_contato.php" method="post">
                    <div>
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div>
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div>
                        <label for="cidade">Cidade: </label>
                        <input type="text" name="cidade" id="cidade">
                    </div>
                    <div>
                        <label for="estado">Estado: </label>
                        <select name="estado" id="estado">
                            <option>AC</option>
                            <option>AL</option>
                            <option>AM</option>
                            <option>AP</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MG</option>
                            <option>MS</option>
                            <option>MT</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>PR</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>RS</option>
                            <option>SC</option>
                            <option>SE</option>
                            <option>SP</option>
                            <option>TO</option>
                        </select>
                    </div>
                    <div>
                        <label for="livro">Indicação de livro: </label>
                        <input type="text" name="livro" id="livro">
                    </div>
                    <div>
                        <label for="nota">Nota do livro: </label>
                        <select name="nota" id="nota">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                    <div>
                        <label for="mensagem">Mensagem: </label>
                        <textarea name="mensagem" id="mensagem"></textarea>
                    </div>
                    <div>
                        <button type="submit">Enviar</button>
                        <button type="reset">Limpar</button>
                    </div>   
                </form>
            </fieldset>

            <section>
                <h3>Esse site é desenvolvido por um mineirinho! UAI</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7747778.9508646475!2d-49.95196267697457!3d-18.524600018069943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa690a165324289%3A0x112170c9379de7b3!2sMinas%20Gerais!5e0!3m2!1spt-BR!2sbr!4v1637008964430!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>
        </main>

        <?php
            include("rodape.php");        
        ?>   
    </body>
</html>