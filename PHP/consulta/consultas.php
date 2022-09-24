<?php


?>
<!DOCTYPE html>
        <head>
                <title> Agendar Consultas </title>
        </head>
        <body>
             <h2> Agendamento de consulta </h2>
                <h3><form name="consultas" method="post" action="">
            <section>
                    <p>
                        <label>Selecione um Médico</label>
                        <select name="select_medico">
                            <option value="" disabled selected>Selecionar</option>
                            <option value="">Carregar Lista</option>
                        </select>
                        <select name="lista_medico" style="display:none"></select>
                    </p>

                    <p>
                        <label>Selecione um Paciente</label>
                        <select name="select_paciente">
                            <option value="" disabled selected>Selecionar</option>
                            <option value="">Carregar Lista</option>
                        </select>
                        <select name="lista_paciente" style="display:none"></select>
                    </p>                    
                        <h5>Data e Hora</h5>
                        <input type="date" name="data" required>
                        <input type="time" name="hora" required>
                    <p>    
                        <button type="submit" name="agendar">Agendar</button>
                        <button type="reset" name=reset>Limpar</button>
                    </p>
                </form></h3>
            </section>
        </body>        
        </html>