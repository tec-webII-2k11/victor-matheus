<?php

<SCRIPT language="JavaScript">

<!--
        hoje = new Date()
        dia = hoje.getDate()
        dias = hoje.getDay()
        mes = hoje.getMonth()
        ano = hoje.getYear()
        if (dia < 10)
                dia = "0" + dia
        
        function CriaArray (n) {
        this.length = n }
        NomeDia = new CriaArray(7)
        NomeDia[0] = "Domingo"
        NomeDia[1] = "Segunda-feira"
        NomeDia[2] = "Terça-feira"
        NomeDia[3] = "Quarta-feira"
        NomeDia[4] = "Quinta-feira"
        NomeDia[5] = "Sexta-feira"
        NomeDia[6] = "Sábado"
        //
        NomeMes = new CriaArray(12)
        NomeMes[0] = "Janeiro"
        NomeMes[1] = "Fevereiro"
        NomeMes[2] = "Março"
        NomeMes[3] = "Abril"
        NomeMes[4] = "Maio"
        NomeMes[5] = "Junho"
        NomeMes[6] = "Julho"
        NomeMes[7] = "Agosto"
        NomeMes[8] = "Setembro"
        NomeMes[9] = "Outubro"
        NomeMes[10] = "Novembro"
        NomeMes[11] = "Dezembro"

        document.write ("<center><font color='darkred'    face='Arial'>"
	+ NomeDia[dias] + ", " + dia + " de " 
	+ NomeMes[mes] + " de 20" + (ano-100) + " </font></center>")
// -->
</SCRIPT>
            
            ?>