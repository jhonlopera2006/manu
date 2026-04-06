<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gracias por todo</title>
	<style>
		html{
      scroll-behavior: smooth;
       scrollbar-width: thin;
       scrollbar-color: #4cafef #111;
       overflow-x: hidden;
       scrollbar-width: none;
    }
#fondo{
   position: absolute;
   top: -1%;
   left: 0%;
   z-index: -1;
   transition: 2s;   
   
}
#fondo1{
   position: absolute;
   top: 110%;
   left: 0%;
   z-index: -1;
  transition: 2s; 
}
#fondo2{
   position: absolute;
   top: 234%;
   left: 0%;
   z-index: -1;
  transition: 2s; 
}
#fondo3{
   position: absolute;
   top: 358%;
   left: 0%;
   z-index: -1;
  transition: 2s; 
}

#cuadro2{
    width: 270px;
    height: auto;
}


#mono{
    position: absolute;
    top: 28%;   
    left: 10%;
}

#cuadro3{
    width: 100%;
    position: relative;
}

#titulo{
    position: absolute;
    top: 38%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    font-size: 40px;
    font-weight: bold;
    text-align: center;
    width: 70%;
    font-family: 'Great Vibes', cursive;
    
}

#azul{
    position: absolute;
    top: 32%;   
    left: 27%;
}

#cuad1{
    width: 60%;
    height: 30%;
    position: relative;
    z-index: 8;
}

#tx1{
    position: absolute;
    top: 45%;
    left: 30%;
    transform: translate(-50%, -50%);
    color: black;
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    z-index: 8;
    width: 50%;
    font-family: 'Great Vibes', cursive;
    
}

#carrusel{
    position: absolute;
    top: 105%;
    left: 5%;
    margin: 100px auto;
    width: 90%;
    display: flex;
    overflow-x: auto;
    scrollbar-width: none;
    overflow: hidden;
    gap: 3%;
}

#carrusel::-webkit-scrollbar{
    display: none; 
}
.carta{
    flex: 0 0 auto;
    padding: 20px;
    font-size: 30px;
    text-align: center;
    position: relative;
}

.grupo{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
    padding-right: 40px;
}

.track{
display:flex;
width:max-content;
animation: spin 35s linear infinite;
}

@keyframes spin{
0% { transform: translateX(0); }
100% { transform: translateX(-50%); }
}

.texto{
    position: absolute;
    top: 41%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    font-size: 27px;
    font-weight: bold;
    text-align: center;
    width: 70%;
    font-family: 'Allura', cursive;
}



#carrusel2{
    position: absolute;
    top: 138%;
    left: 5%;
    margin: 100px auto;
    width: 90%;
    display: flex;
    overflow-x: auto;
    scrollbar-width: none;
    overflow: hidden;
    gap: 3%;
    justify-content: flex-end;
}

#carrusel2::-webkit-scrollbar{
    display: none; 
}
.carta2{
    flex: 0 0 auto;
    padding: 20px;
    font-size: 30px;
    text-align: center;
    position: relative;
}

.grupo2{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
    padding-right: 40px;
}


@keyframes spinReverse{
0% { transform: translateX(0); }
100% { transform: translateX(50%); }
}
.track2{
display:flex;
width:max-content;
animation: spinReverse 35s linear infinite;
}

.texto2{
    position: absolute;
    top: 41%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    font-size: 27px;
    font-weight: bold;
    text-align: center;
    width: 70%;
    font-family: 'Allura', cursive;
}



#carrusel3{
    position: absolute;
    top: 171%;
    left: 5%;
    margin: 100px auto;
    width: 90%;
    display: flex;
    overflow-x: auto;
    scrollbar-width: none;
    overflow: hidden;
    gap: 3%;
}

#carrusel3::-webkit-scrollbar{
    display: none; 
}
.carta3{
    flex: 0 0 auto;
    padding: 20px;
    font-size: 30px;
    text-align: center;
    position: relative;
}

.grupo3{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
    padding-right: 40px;
}

.track3{
display:flex;
width:max-content;
animation: spin 35s linear infinite;
}

@keyframes spin{
0% { transform: translateX(0); }
100% { transform: translateX(-50%); }
}

.texto3{
    position: absolute;
    top: 48%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    font-size: 27px;
    font-weight: bold;
    text-align: center;
    width: 70%;
    font-family: 'Allura', cursive;
}



#mono2{
    position: absolute;
    top: 245%;   
    left: 10%;
    opacity: 1;
    transform: translateY(0px);
    transition: all 1s ease;
}

#cuadro32{
    width: 100%;
    position: relative;
}

#titulo2{
    position: absolute;
    top: 38%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    font-size: 40px;
    font-weight: bold;
    text-align: center;
    width: 70%;
    font-family: 'Great Vibes', cursive;
    
}

#azul2{
    position: absolute;
    top: 249%;   
    left: 27%;
}

#cuad12{
    width: 60%;
    height: 30%;
    position: relative;
    z-index: 8;
}

#tx12{
    position: absolute;
    top: 45%;
    left: 30%;
    transform: translate(-50%, -50%);
    color: black;
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    z-index: 8;
    width: 50%;
    font-family: 'Great Vibes', cursive;
    
}

#mono23{
    position: absolute;
    top: 245%;   
    left: 10%;
    height: 800px;
    opacity: 0;
    transition: opacity 1s ease;
    pointer-events: none;


#cuadro33{
    width: 100%;
    height: 104%;
    position: relative;

}

#titulo3{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    font-size: 27px;
    font-weight: bold;
    text-align: center;
    width: 90%;
    font-family: 'Great Vibes', cursive;
    
}

	</style>
	<link rel="icon" type="image/png" href="cora.png">
   <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">

</head>
<body>
<img src="noche.png" id="fondo">
<img src="noche.png" id="fondo1">
<img src="noche.png" id="fondo2">
<img src="noche.png" id="fondo3">

<div id="azul">
<img src="cua1.png" id="cuad1">
<a href="#carrusel"><div id="tx1">Haz click si quieres saber porque ✨✨</div></a>
</div>

<div id="mono">
   <img src="cuadro_pro_3.png" id="cuadro3">
    <div id="titulo">Entre tantas amistades pasajeras, la vida me regaló un alma gemela que he decidido querer y cuidar para siempre, y esa eres tú</div>
</div>

<div id="carrusel">
    <div class="track">
<div class="grupo">

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 1:<br>  Desbordas mi dia a dia con tu cariño constante</div>
</div>
<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 2:<br> Siempre estas cuando te necesito </div>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 3:<br> Por dejarme ser yo mismo todo el tiempo </div>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 4:<br> Por hacerme saber lo que es una verdadera amistad </div>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 5:<br> Por siempre estar cuando te necesito </div>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 6:<br> Por que eres mi curita del alma</div>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 7:<br> Por encontrar las palabras indicadas cada que lo necesito</div>
</div>
<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <a href="#mono2"><div class="texto">Razon 8:<br> Por que siempre te pones en mis zapatos </div></a>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 9:<br> Por que siempre me das grandes consejos </div>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 10:<br> Por que eres lo más importante que tengo </div>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 11:<br> Por demostrarme siempre lo mucho que valgo</div>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 12:<br> Por que al hablar contigo me siento muy feliz  </div>
</div>
 </div>  

<div class="grupo">

<div class="carta">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto">Razon 1:<br> Desbordas mi dia a dia con tu cariño constante</div>
</div>

<div class="carta">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto">Razon 2:<br> Siempre estas cuando te necesito </div>
</div>

<div class="carta">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto">Razon 3:<br> Por dejarme ser yo mismo todo el tiempo </div>
</div>

<div class="carta">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto">Razon 4:<br> Por hacerme saber lo que es una verdadera amistad </div>
</div>

<div class="carta">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto">Razon 5:<br> Por siempre estar cuando te necesito </div>
</div>

<div class="carta">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto">Razon 6:<br> Por que eres mi curita del alma</div>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 7:<br> Por encontrar las palabras indicadas cada que lo necesito</div>
</div>
<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <a href="#mono2"><div class="texto">Razon 8:<br> Por que siempre te pones en mis zapatos </div></a>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 9:<br> Por que siempre me das grandes consejos </div>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 10:<br> Por que eres lo más importante que tengo </div>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 11:<br> Por demostrarme siempre lo mucho que valgo</div>
</div>

<div class="carta">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto">Razon 12:<br> Por que al hablar contigo me siento muy feliz  </div>
</div>

</div>
</div>
</div>




<div id="carrusel2">
    <div class="track2">
<div class="grupo2">

<div class="carta2">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto2">Razon 24:<br>Por tu autenticidad; nunca finges ser alguien que no eres.</div>
</div>

<div class="carta2">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto2">Razon 23:<br> Porque puedo contar contigo a cualquier hora. </div>
</div>

<div class="carta2">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto2">Razon 22:<br>Por creer en mi potencial cuando yo dudo. </div>
</div>

<div class="carta2">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto2">Razon 21:<br> Por nuestras bromas internas que nadie más entiende. </div>
</div>

<div class="carta2">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto2">Razon 20:<br> Por los silencios cómodos donde no hace falta decir nada.</div>
</div>

<div class="carta2">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto2">Razon 19:<br> Por los audios eternos contándonos la vida.</div>
</div>

<div class="carta2">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto2">Razon 18:<br> Porque haces que los días pesados sean más ligeros.</div>
</div>
<div class="carta2">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto2">Razon 17:<br>Porque me inspiras a ser mejor versión de mí.</div>
</div>

<div class="carta2">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto2">Razon 16:<br> Por la paz que me da saber que estás en mi futuro. </div>
</div>

<div class="carta2">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto2">Razon 15:<br> Por enseñarme el verdadero significado de la gratitud. </div>
</div>

<div class="carta2">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto2">Razon 14:<br> Por sobrevivir a mis momentos de más estrés.</div>
</div>

<div class="carta2">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto2">Razon 13:<br> Por ser, simplemente, tú  </div>
</div>
</div>
       

<div class="grupo2">

<div class="carta2">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto2">Razon 24:<br>Por tu autenticidad; nunca finges ser alguien que no eres.</div>
</div>

<div class="carta2">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto2">Razon 23:<br> Porque puedo contar contigo a cualquier hora. </div>
</div>

<div class="carta2">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto2">Razon 22:<br>Por creer en mi potencial cuando yo dudo. </div>
</div>

<div class="carta2">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto2">Razon 21:<br> Por nuestras bromas internas que nadie más entiende. </div>
</div>

<div class="carta2">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto2">Razon 20:<br> Por los silencios cómodos donde no hace falta decir nada.</div>
</div>

<div class="carta2">
<img src="cuadro_pro_7.png" id="cuadro2">
<div class="texto2">Razon 19:<br> Por los audios eternos contándonos la vida.</div>
</div>

<div class="carta2">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto2">Razon 18:<br> Porque haces que los días pesados sean más ligeros.</div>
</div>
<div class="carta2">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto2">Razon 17:<br>Porque me inspiras a ser mejor versión de mí.</div>
</div>

<div class="carta2">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto2">Razon 16:<br> Por la paz que me da saber que estás en mi futuro. </div>
</div>

<div class="carta2">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto2">Razon 15:<br> Por enseñarme el verdadero significado de la gratitud. </div>
</div>

<div class="carta2">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto2">Razon 14:<br> Por sobrevivir a mis momentos de más estrés.</div>
</div>

<div class="carta2">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto2">Razon 13:<br> Por ser, simplemente, tú  </div>
</div>

</div>
</div>
</div>




<div id="carrusel3">
    <div class="track3">
<div class="grupo3">

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 25:<br>  Por los recuerdos que hemos construido y los que faltan por hacer.</div>
</div>
<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 26:<br> Por tu forma tan única de ver el mundo. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 27:<br> Por las canciones que me recuerdan a ti y a nuestros momentos. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 28:<br> Por ser mi refugio seguro en un mundo tan caótico. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 29:<br> Por la paciencia que tienes con mis indecisiones. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 30:<br> Por no dejarme solo cuando las cosas se ponen difíciles.</div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 31:<br> Por los planes improvisados que siempre terminan siendo los mejores.</div>
</div>
<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 32:<br> Por tu capacidad de ver el lado positivo. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 33:<br> Por escuchar mis dramas mil veces como si fuera la primera. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 34:<br> Por motivarme a salir de mi zona de confort cuando me da miedo el cambio. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 35:<br> Por ser la primera persona a la que quiero llamar cuando tengo una buena noticia.</div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 36:<br>Por la seguridad que me da saber que, pase lo que pase, nuestra amistad es constante.  </div>
</div>
 </div>  

<div class="grupo3">

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 25:<br>  Por los recuerdos que hemos construido y los que faltan por hacer.</div>
</div>
<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 26:<br> Por tu forma tan única de ver el mundo. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 27:<br> Por las canciones que me recuerdan a ti y a nuestros momentos. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 28:<br> Por ser mi refugio seguro en un mundo tan caótico. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 29:<br> Por la paciencia que tienes con mis indecisiones. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 30:<br> Por no dejarme solo cuando las cosas se ponen difíciles.</div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 31:<br> Por los planes improvisados que siempre terminan siendo los mejores.</div>
</div>
<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 32:<br> Por tu capacidad de ver el lado positivo. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 33:<br> Por escuchar mis dramas mil veces como si fuera la primera. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 34:<br> Por motivarme a salir de mi zona de confort cuando me da miedo el cambio. </div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 35:<br> Por ser la primera persona a la que quiero llamar cuando tengo una buena noticia.</div>
</div>

<div class="carta3">
    <img src="cuadro_pro_7.png" id="cuadro2">
    <div class="texto3">Razon 36:<br>Por la seguridad que me da saber que, pase lo que pase, nuestra amistad es constante.  </div>

</div>
</div>
</div>
</div>


<div id="azul2">
<img src="cua1.png" id="cuad12">
<div id="tx12" onclick="carta()">Haz click si quieres verla✨✨</div>
</div>

<div id="mono2">
   <img src="cuadro_pro_3.png" id="cuadro32">
    <div id="titulo2">Y por si fuera poco, una carta "cortica" para poder demostrar una minima parte de lo que significas para mi</div>
</div>

<div id="mono23">
   <img src="cuadro_pro_4.png" id="cuadro33">
    <div id="titulo3">❤️❤️Para mi persona favorita en el mundo❤️❤️  <br>
No sé la verdad muy bien cómo poder expresar en palabras algo que mi corazón siente con tanta fuerza cada vez que pienso en ti , pero esta vez si sentí la necesidad de que lo supieras, sin ocultarte nada y con toda la honestidad del mundo.A lo largo de la vida conocemos muchas personas, nos llenamos de ruido y muchas veces de momentos que son pasajeros, pero entre todo ese caos, siempre estás tú. Eres el lugar seguro al que mi mente quiere ir cuando todo va mal, pero a su vez también es el primer lugar al que quiero ir cuando todo va bien, y permitiéndome ver hacia hacia atrás, me doy cuenta de que tenerte en mi vida no es algo que solo sea una casualidad o un golpe de suerte, si no que es el regalo más grande que me ha dado el destino.Quiero que en este momento, mientras lees esto, te quede algo grabado a en tu cabeza y es que siempre te voy a escoger a ti. Si me pusieran a elegir entre mil personas, mil planes o mil caminos distintos, mi elección siempre sería tu nombre, puedo decir verdaderamente que no importa quién llega o quién se va, tú tienes un lugar que nadie podrá tocar, porque te has ganado cada pedazo de mi cariño con tu forma de ser, con tu apoyo que siempre aparece cuando lo necesitas y con esa luz que tienes y que logras pegármela incluso en mis días más malucos, con ese humor que compartimos y esa risa tan contagiosa que tienes.Me llena de un orgullo que no imaginas el poder decir que eres mi mejor amiga. Y ese hecho puede conmigo, saber que cuento con alguien que me conoce de verdad, que es mi "yo" en el genero opuesto, que sabe lo que siento y pienso con una sola palabra y que nunca, bajo ninguna circunstancia, me ha dejado solo. Desde mi corazón solo puedo decir gracias por estar, por ser y por dejarme ser parte de tu día a día.yo te prometo estar siempre para ti cada vez que me necesites, ya sea en los días de risas, diversión, disfrute y mucho mas en las noches donde el silencio pesa. Prometo ser tu apoyo siempre que me necesites, tu escucha y  aun que pasa pocas veces tu un lugar seguro donde puedas decir todo lo que necesites, tal como tú lo has sido para mí. Mi vida es muchísimo más bonita, más alegre y más fácil de vivir desde que tú estás en ella.Te amo con todo lo que soy, hoy y siempre. De verdad nuela muchas gracias por ser mi mejor elección, mi curita del alma y todo lo que mi corazón necesita para ser feliz.</div>
</div>



<script>
   function carta() {

    azul2.style.opacity=0
    mono2.style.opacity=0
    mono2.style.transform="translateY(-30px)"
    setTimeout(() => {
        mono23.style.opacity=1
        mono23.style.transform="translateY(0px)"
    }, 600)

}
</script>

</body>
</html>