<!DOCTYPE html>
<html>
  <head>
    <title>Data Layer: Polygon</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="index.css">
  </head>
  <body>
  	<h1>Mapa cargado</h1>
    <div id="map"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 19.9, lng: -97.4}
        });
            var Puebla =[
            <?php
            include 'funciones/Puebla.php';
            ?>
            ];      

            var acateno =[
            <?php
            include 'funciones/acateno.php';
            ?>            
            ];

            var ahuatlan =[
            <?php
            include 'funciones/ahuatlan.php';
            ?>
            ];

            var ahuehuetitla =[
            <?php
            include 'funciones/ahuehuetitla.php';
            ?>
            ];

            var albinoZertuche =[
            <?php
            include 'funciones/albinoZertuche.php';
            ?>
            ];

            var aljojuca =[
            <?php
            include 'funciones/aljojuca.php';
            ?>
            ];

            var amixtlan =[
            <?php
            include 'funciones/amixtlan.php';
            ?>
            ];

            var atempan =[
            <?php
            include 'funciones/atempan.php';
            ?>
            ];

            var atzitzihuacan =[
            <?php
            include 'funciones/atzitzihuacan.php';
            ?>
            ];

            var atzitzintla =[
            <?php
            include 'funciones/atzitzintla.php';
            ?>
            ];

            var axutla =[
            <?php
            include 'funciones/axutla.php';
            ?>
            ];

            var calpan = [
            <?php
            include 'funciones/calpan.php'
            ?>
            ];

            var caltepec = [
            <?php
            include 'funciones/caltepec.php'
            ?>
            ];

            var caltepec1 = [
            <?php
            include 'funciones/caltepec1.php'
            ?>
            ];


            var esperanza = [
            <?php
            include 'funciones/esperanza.php'
            ?>
            ];

            var guadalupe = [
            <?php
            include 'funciones/guadalupe.php'
            ?>
            ];
            var guadalupeVictoria = [
            <?php
            include 'funciones/guadalupeVictoria.php'
            ?>
            ];

            var huaquechula = [
            <?php
            include 'funciones/huaquechula.php'
            ?>
            ];

            var huatlatlauca = [
            <?php
            include 'funciones/huatlatlauca.php'
            ?>
            ];

            var hueytamalco = [
            <?php
            include 'funciones/hueytamalco.php'
            ?>
            ];

            var hueytlalpan = [
            <?php
            include 'funciones/hueytlalpan.php'
            ?>
            ];   

            var huitzilanDeSerdan = [
            <?php
            include 'funciones/huitzilanDeSerdan.php'
            ?>
            ];

            var ixcamilpaDeGuerrero = [
            <?php
            include 'funciones/ixcamilpaDeGuerrero.php'
            ?>
            ];

            var ixcaquixtla = [
            <?php
            include 'funciones/ixcaquixtla.php'
            ?>
            ];

            var ixtacamaxtitlan = [
            <?php
            include 'funciones/ixtacamaxtitlan.php'
            ?>
            ];

            var jalpan = [
            <?php
            include 'funciones/jalpan.php'
            ?>
            ];

            var jopala = [
            <?php
            include 'funciones/jopala.php'
            ?>
            ];

            var juanNMendez = [
            <?php
            include 'funciones/juanNMendez.php'
            ?>
            ];

            var lafragua = [
            <?php
            include 'funciones/lafragua.php'
            ?>
            ];

            var libres = [
            <?php
            include 'funciones/libres.php'
            ?>
            ];

            var mixtla = [
            <?php
            include 'funciones/mixtla.php'
            ?>
            ];

            var molcaxac = [
            <?php
            include 'funciones/molcaxac.php'
            ?>
            ];

            var naupan = [
            <?php
            include 'funciones/naupan.php'
            ?>
            ];

            var nicolasBravo = [
            <?php
            include 'funciones/nicolasBravo.php'
            ?>
            ];

            var nopalucan = [
            <?php
            include 'funciones/nopalucan.php'
            ?>
            ];

            var oriental = [
            <?php
            include 'funciones/oriental.php'
            ?>
            ];

            var pahuatlan = [
            <?php
            include 'funciones/pahuatlan.php'
            ?>
            ];

            var huehuetla = [
            <?php
            include 'funciones/huehuetla.php'
            ?>
            ];

            var huehuetla1 = [
            <?php
            include 'funciones/huehuetla1.php'
            ?>
            ];



            var quimixtlan = [
            <?php
            include 'funciones/quimixtlan.php'
            ?>
            ];

            var sanDiegoLaMesaTochimiltzingo = [
            <?php
            include 'funciones/sanDiegoLaMesaTochimiltzingo.php'
            ?>
            ];

             var sanFelipeTepatlan = [
            <?php
            include 'funciones/sanFelipeTepatlan.php'
            ?>
            ];

             var sanJeronimoTecuanipan = [
            <?php
            include 'funciones/sanJeronimoTecuanipan.php'
            ?>
            ];

            /*           
            
            */

            var sanJeronimoXayacatlan = [
            <?php
            include 'funciones/sanJeronimoXayacatlan.php'
            ?>
            ];

            var sanJoseChiapa = [
            <?php
            include 'funciones/sanJoseChiapa.php'
            ?>
            ];

            var sanJuanAtenco = [
            <?php
            include 'funciones/sanJuanAtenco.php'
            ?>
            ];

            var sanJuanAtzompa = [
            <?php
            include 'funciones/sanJuanAtzompa.php'
            ?>
            ];

            var sanMiguelIxitlan = [
            <?php
            include 'funciones/sanMiguelIxitlan.php'
            ?>
            ];

            var camocuautla = [
            <?php
            include 'funciones/camocuautla.php'
            ?>
            ];

            var caxhuacan = [
            <?php
            include 'funciones/caxhuacan.php'
            ?>
            ];

            var coatzingo = [
            <?php
            include 'funciones/coatzingo.php'
            ?>
            ];

            var cohuecan = [
            <?php
            include 'funciones/cohuecan.php'
            ?>
            ];

            var coyomeapan = [
            <?php
            include 'funciones/coyomeapan.php'
            ?>
            ];

            var coyotepec = [
            <?php
            include 'funciones/coyotepec.php'
            ?>
            ];

            var cuautempan = [
            <?php
            include 'funciones/cuautempan.php'
            ?>
            ];

            var cuautlancingo = [
            <?php
            include 'funciones/cuautlancingo.php'
            ?>
            ];

            var cuyoaco = [
            <?php
            include 'funciones/cuyoaco.php'
            ?>
            ];

            var chalchicomulaDeSesma = [
            <?php
            include 'funciones/chalchicomulaDeSesma.php'
            ?>
            ];

            var chapulco = [
            <?php
            include 'funciones/chapulco.php'
            ?>
            ];

            var chiconcuautla = [
            <?php
            include 'funciones/chiconcuautla.php'
            ?>
            ];

            var chignahuapan = [
            <?php
            include 'funciones/chignahuapan.php'
            ?>
            ];

            var chignautla = [
            <?php
            include 'funciones/chignautla.php'
            ?>
            ];

            var chila = [
            <?php
            include 'funciones/chila.php'
            ?>
            ];

            var chilaDeLaSal = [
            <?php
            include 'funciones/chilaDeLaSal.php'
            ?>
            ];

            var chinantla = [
            <?php
            include 'funciones/chinantla.php'
            ?>
            ];

            var epatlan = [
            <?php
            include 'funciones/epatlan.php'
            ?>
            ];

            var laMagdalenaTlatlauquitepec = [
            <?php
            include 'funciones/laMagdalenaTlatlauquitepec.php'
            ?>
            ];

            var sanNicolasDeLosRanchos = [
            <?php
            include 'funciones/sanNicolasDeLosRanchos.php'
            ?>
            ];


            var sanPedroCholula = [
            <?php
            include 'funciones/sanPedroCholula.php'
            ?>
            ];

            var sanPedroYeloixtlahuacan = [
            <?php
            include 'funciones/sanPedroYeloixtlahuacan.php'
            ?>
            ];

            var sanSalvadorElSeco = [
            <?php
            include 'funciones/sanSalvadorElSeco.php'
            ?>
            ];

            var sanSalvadorElVerde = [
            <?php
            include 'funciones/sanSalvadorElVerde.php'
            ?>
            ];

            var santaCatarinaTlaltempan = [
            <?php
            include 'funciones/santaCatarinaTlaltempan.php'
            ?>
            ];

            var santaInesAhuatempan = [
            <?php
            include 'funciones/santaInesAhuatempan.php'
            ?>
            ];
            

            var santiagoMiahuatlan = [
            <?php
            include 'funciones/santiagoMiahuatlan.php'
            ?>
            ];

            var huehuetlanElGrande = [
            <?php
            include 'funciones/huehuetlanElGrande.php'
            ?>
            ];

            var soltepec = [
            <?php
            include 'funciones/soltepec.php'
            ?>
            ];

            var tehuacan = [
            <?php
            include 'funciones/tehuacan.php'
            ?>
            ];

            var tehuitzingo = [
            <?php
            include 'funciones/tehuitzingo.php'
            ?>
            ];

            var tenampulco = [
            <?php
            include 'funciones/tenampulco.php'
            ?>
            ];

            var teopantlan = [
            <?php
            include 'funciones/teopantlan.php'
            ?>
            ];

            var tepangoDeRodriguez = [
            <?php
            include 'funciones/tepangoDeRodriguez.php'
            ?>
            ];

            var tepemaxalco = [
            <?php
            include 'funciones/tepemaxalco.php'
            ?>
            ];

            var tepeojuma = [
            <?php
            include 'funciones/tepeojuma.php'
            ?>
            ];

            var tepexiDeRodriguez = [
            <?php
            include 'funciones/tepexiDeRodriguez.php'
            ?>
            ];

            var tepeyahualco = [
            <?php
            include 'funciones/tepeyahualco.php'
            ?>
            ];

            var tetelaDeOcampo = [
            <?php
            include 'funciones/tetelaDeOcampo.php'
            ?>
            ];

            var tetelesDeAvilaCastillo = [
            <?php
            include 'funciones/tetelesDeAvilaCastillo.php'
            ?>
            ];

            var teziutlan = [
            <?php
            include 'funciones/teziutlan.php'
            ?>
            ];

            var tianguismanalco = [
            <?php
            include 'funciones/tianguismanalco.php'
            ?>
            ];

            var tlahuapan = [
            <?php
            include 'funciones/tlahuapan.php'
            ?>
            ];

            var tlaltenango = [
            <?php
            include 'funciones/tlaltenango.php'
            ?>
            ];

            var tlanepantla = [
            <?php
            include 'funciones/tlanepantla.php'
            ?>
            ];
            
            var tlapacoya = [
            <?php
            include 'funciones/tlapacoya.php'
            ?>
            ];
            
            var tlapanala = [
            <?php
            include 'funciones/tlapanala.php'
            ?>
            ];
            
            var tlaxco = [
            <?php
            include 'funciones/tlaxco.php'
            ?>
            ];
            
            var totoltepecDeGuerrero = [
            <?php
            include 'funciones/totoltepecDeGuerrero.php'
            ?>
            ];

            var tulcingo = [
            <?php
            include 'funciones/tulcingo.php'
            ?>
            ];

            var tuzamapanDeGaleana = [
            <?php
            include 'funciones/tuzamapanDeGaleana.php'
            ?>
            ];
            
            
            var vicenteGuerrero = [
            <?php
            include 'funciones/vicenteGuerrero.php'
            ?>
            ];

            
            var xayacatlanDeBravo = [
            <?php
            include 'funciones/xayacatlanDeBravo.php'
            ?>
            ];
                  

            var xicotepec = [
            <?php
            include 'funciones/xicotepec.php'
            ?>
            ];


            var xicotlan = [
            <?php
            include 'funciones/xicotlan.php'
            ?>
            ];
            

            var xochiltepec = [
            <?php
            include 'funciones/xochiltepec.php'
            ?>
            ];

            var xochitlanDeVicenteSuarez = [
            <?php
            include 'funciones/xochitlanDeVicenteSuarez.php'
            ?>
            ];


            var zacapoaxtla = [
            <?php
            include 'funciones/zacapoaxtla.php'
            ?>
            ];


            var zacatlan = [
            <?php
            include 'funciones/zacatlan.php'
            ?>
            ];

            
            var zaragoza = [
            <?php
            include 'funciones/zaragoza.php'
            ?>
            ];

            var zautla = [
            <?php
            include 'funciones/zautla.php'
            ?>
            ];


            var zongozotla = [
            <?php
            include 'funciones/zongozotla.php'
            ?>
            ];

            var xiutetelco = [
            <?php
            include 'funciones/xiutetelco.php'
            ?>
            ];

            var yehualtepec = [
            <?php
            include 'funciones/yehualtepec.php'
            ?>
            ];

            var tlacotepecDeBenitoJuarez = [
            <?php
            include 'funciones/tlacotepecDeBenitoJuarez.php'
            ?>
            ];

            var pantepec = [
            <?php
            include 'funciones/pantepec.php'
            ?>
            ];
            
            
            var chietla = [
            <?php
            include 'funciones/chietla.php'
            ?>
            ];
            

            var atoyatempan = [
            <?php
            include 'funciones/atoyatempan.php'
            ?>
            ];

            var acatzingo = [
            <?php
            include 'funciones/acatzingo.php'
            ?>
            ];

            var altepexi = [
            <?php
            include 'funciones/altepexi.php'
            ?>
            ];

            var coxcatlan = [
            <?php
            include 'funciones/coxcatlan.php'
            ?>
            ];

            var quecholac = [
            <?php
            include 'funciones/quecholac.php'
            ?>
            ];

            var tecamachalco = [
            <?php
            include 'funciones/tecamachalco.php'
            ?>
            ];

            var venustianoCarranza = [
            <?php
            include 'funciones/venustianoCarranza.php'
            ?>
            ];

            var acajete = [
            <?php
            include 'funciones/acajete.php'
            ?>
            ];
            
            var generalFelipeAngeles = [
            <?php
            include 'funciones/generalFelipeAngeles.php'
            ?>
            ];
            
            
            var sanJoseMiahuatlan = [
            <?php
            include 'funciones/sanJoseMiahuatlan.php'
            ?>
            ];

            var tepancoDeLopez = [
            <?php
            include 'funciones/tepancoDeLopez.php'
            ?>
            ];

            var zinacatepec = [
            <?php
            include 'funciones/zinacatepec.php'
            ?>
            ];

            var coronango = [
            <?php
            include 'funciones/coronango.php'
            ?>
            ];

            var domingoArenas = [
            <?php
            include 'funciones/domingoArenas.php'
            ?>
            ];

            var tecaliDeHerrera = [
            <?php
            include 'funciones/tecaliDeHerrera.php'
            ?>
            ];

            var tochtepec = [
            <?php
            include 'funciones/tochtepec.php'
            ?>
            ];

            var tepatlaxco = [
            <?php
            include 'funciones/tepatlaxco.php'
            ?>
            ];

            var acatlan = [
            <?php
            include 'funciones/acatlan.php'
            ?>                                
            ];

            var acatlan1 = [           
            <?php
            include 'funciones/acatlan1.php'
            ?>                       
            ];

            var atlixco = [
            <?php
            include 'funciones/atlixco.php'
            ?>                                
            ];

            var palmarDeBravo = [
            <?php
            include 'funciones/palmarDeBravo.php'
            ?>                                
            ];

            
            var rafaelLaraGrajales = [
            <?php
            include 'funciones/rafaelLaraGrajales.php'
            ?>                                
            ];

            var rafaelLaraGrajales1 = [
            <?php
            include 'funciones/rafaelLaraGrajales1.php'
            ?>                                
            ];

            var acteopan = [
            <?php
            include 'funciones/acteopan.php'
            ?>                                
            ];
            
            
            var ahuacatlan = [
            <?php
            include 'funciones/ahuacatlan.php'
            ?>                                
            ];
            
            var ahuazotepec = [
            <?php
            include 'funciones/ahuazotepec.php'
            ?>                                
            ];

            var aquixtla = [
            <?php
            include 'funciones/aquixtla.php'
            ?>                                
            ];


            var atexcal = [
            <?php
            include 'funciones/atexcal.php'
            ?>                                
            ];

            var sanGregorioAtzompa = [
            <?php
            include 'funciones/sanGregorioAtzompa.php'
            ?>                                
            ];

            var sanPabloAnicano = [
            <?php
            include 'funciones/sanPabloAnicano.php'
            ?>                                
            ];

            var sanGabrielChilac = [
            <?php
            include 'funciones/sanGabrielChilac.php'
            ?>                                
            ];

            var atzala = [
            <?php
            include 'funciones/atzala.php'
            ?>                                
            ];

            var ayotoxcoDeGuerrero = [
            <?php
            include 'funciones/ayotoxcoDeGuerrero.php'
            ?>                                
            ];
            
            var coatepec = [
            <?php
            include 'funciones/coatepec.php'
            ?>                                
            ];

            var cohetzala = [
            <?php
            include 'funciones/cohetzala.php'
            ?>                                
            ];

            var cuapiaxtlaDeMadero = [
            <?php
            include 'funciones/cuapiaxtlaDeMadero.php'
            ?>                                
            ];

            var cuautinchan = [
            <?php
            include 'funciones/cuautinchan.php'
            ?>                                
            ];

            var cuayucaDeAndrade = [
            <?php
            include 'funciones/cuayucaDeAndrade.php'
            ?>                                
            ];

            var cuetzalanDelProgreso = [
            <?php
            include 'funciones/cuetzalanDelProgreso.php'
            ?>                                
            ];

            var chichiquila = [
            <?php
            include 'funciones/chichiquila.php'
            ?>                                
            ];

            var chigmecatitlan = [
            <?php
            include 'funciones/chigmecatitlan.php'
            ?>                                
            ];

            var honey = [
            <?php
            include 'funciones/honey.php'
            ?>                                
            ];

            var chilchotla = [
            <?php
            include 'funciones/chilchotla.php'
            ?>                                
            ];

            var eloxochitlan = [
            <?php
            include 'funciones/eloxochitlan.php'
            ?>                                
            ];

            var hermenegildoGaleana = [
            <?php
            include 'funciones/hermenegildoGaleana.php'
            ?>                                
            ];

            var huauchinango = [
            <?php
            include 'funciones/huauchinango.php'
            ?>                                
            ];

            var huejotzingo = [
            <?php
            include 'funciones/huejotzingo.php'
            ?>                                
            ];

            var hueyapan = [
            <?php
            include 'funciones/hueyapan.php'
            ?>                                
            ];

            var atlequizayan = [
            <?php
            include 'funciones/atlequizayan.php'
            ?>                                
            ];

            var ixtepec = [
            <?php
            include 'funciones/ixtepec.php'
            ?>                                
            ];

            var jolalpan = [
            <?php
            include 'funciones/jolalpan.php'
            ?>                                
            ];

            var juanGalindo = [
            <?php
            include 'funciones/juanGalindo.php'
            ?>                                
            ];

            var mazapiltepecDeJuarez = [
            <?php
            include 'funciones/mazapiltepecDeJuarez.php'
            ?>                                
            ];

            var caniadaMorelos = [
            <?php
            include 'funciones/caniadaMorelos.php'
            ?>                                
            ];

            var nauzontla = [
            <?php
            include 'funciones/nauzontla.php'
            ?>                                
            ];

            var ocotepec = [
            <?php
            include 'funciones/ocotepec.php'
            ?>                                
            ];

            var olintla = [
            <?php
            include 'funciones/olintla.php'
            ?>                                
            ];

            var piaxtla = [
            <?php
            include 'funciones/piaxtla.php'
            ?>                                
            ];

            var losReyesDeJuarez = [
            <?php
            include 'funciones/losReyesDeJuarez.php'
            ?>                                
            ];

            var sanAntonioCanida = [
            <?php
            include 'funciones/sanAntonioCanida.php'
            ?>                                
            ];

            var sanMartinTotoltepec = [
            <?php
            include 'funciones/sanMartinTotoltepec.php'
            ?>                                
            ];

            var sanMatiasTlalancaleca = [
            <?php
            include 'funciones/sanMatiasTlalancaleca.php'
            ?>                                
            ];

            var sanNicolasBuenosAires = [
            <?php
            include 'funciones/sanNicolasBuenosAires.php'
            ?>                                
            ];

            var sanSebastianTlacotepec = [
            <?php
            include 'funciones/sanSebastianTlacotepec.php'
            ?>                                
            ];

            var santaIsabelCholula = [
            <?php
            include 'funciones/santaIsabelCholula.php'
            ?>                                
            ];

            var santoTomasHueyotlipan = [
            <?php
            include 'funciones/santoTomasHueyotlipan.php'
            ?>                                
            ];

            var teotlalco = [
            <?php
            include 'funciones/teotlalco.php'
            ?>                                
            ];

            var tepetzintla = [
            <?php
            include 'funciones/tepetzintla.php'
            ?>                                
            ];
            
            var tepexco = [
            <?php
            include 'funciones/tepexco.php'
            ?>                                
            ];

            var tepeyahualcoDeCuauhtemoc = [
            <?php
            include 'funciones/tepeyahualcoDeCuauhtemoc.php'
            ?>                                
            ];
            
            var tilapa = [
            <?php
            include 'funciones/tilapa.php'
            ?>                                
            ];

            var tlacuilotepec = [
            <?php
            include 'funciones/tlacuilotepec.php'
            ?>                                
            ];


            var tlachichuca = [
            <?php
            include 'funciones/tlachichuca.php'
            ?>                                
            ];

            var tlaola = [
            <?php
            include 'funciones/tlaola.php'
            ?>                                
            ];

            var tlatlauquitepec = [
            <?php
            include 'funciones/tlatlauquitepec.php'
            ?>                                
            ];

            var tochimilco = [
            <?php
            include 'funciones/tochimilco.php'
            ?>                                
            ];

            var tzicatlacoyan = [
            <?php
            include 'funciones/tzicatlacoyan.php'
            ?>                                
            ];

            var xochiapulco = [
            <?php
            include 'funciones/xochiapulco.php'
            ?>                                
            ];

            var xochitlanTodosSantos = [
            <?php
            include 'funciones/xochitlanTodosSantos.php'
            ?>                                
            ];

            var yaonahuac = [
            <?php
            include 'funciones/yaonahuac.php'
            ?>                                
            ];
            
            var zacapala = [
            <?php
            include 'funciones/zacapala.php'
            ?>                                
            ];

            var zapotitlan = [
            <?php
            include 'funciones/zapotitlan.php'
            ?>                                
            ];

            var zapotitlanDeMendez = [
            <?php
            include 'funciones/zapotitlanDeMendez.php'
            ?>                                
            ];
            
            
            var zihuateutla = [
            <?php
            include 'funciones/zihuateutla.php'
            ?>                                
            ];
            
            var tepeaca = [
            <?php
            include 'funciones/tepeaca.php'
            ?>                                
            ];

            var sanSalvadorHuixcolotla = [
            <?php
            include 'funciones/sanSalvadorHuixcolotla.php'
            ?>                                
            ];

            var izucarDeMatamoros = [
            <?php
            include 'funciones/izucarDeMatamoros.php'
            ?>                                
            ];

            var franciscoZMena = [
            <?php
            include 'funciones/franciscoZMena.php'
            ?>                                
            ];

            var nealtican = [
            <?php
            include 'funciones/nealtican.php'
            ?>                                
            ];

            var chiautla = [
            <?php
            include 'funciones/chiautla.php'
            ?>                                
            ];

            var chiautla1 = [
            <?php
            include 'funciones/chiautla1.php'
            ?>                                
            ];

            var ocoyucan = [
            <?php
            include 'funciones/ocoyucan.php'
            ?>                                
            ];

            var ajalpan = [
            <?php
            include 'funciones/ajalpan.php'
            ?>                                
            ];

            var juanCBonilla = [
            <?php
            include 'funciones/juanCBonilla.php'
            ?>                                
            ];

            var huitziltepec = [
            <?php
            include 'funciones/huitziltepec.php'
            ?>                                
            ];

            var zoquitlan = [
            <?php
            include 'funciones/zoquitlan.php'
            ?>                                
            ];

            var sanMartinTexmelucan = [
            <?php
            include 'funciones/sanMartinTexmelucan.php'
            ?>                                
            ];

            var chiautzingo = [
            <?php
            include 'funciones/chiautzingo.php'
            ?>                                
            ];

            var puebla = [
            <?php
            include 'funciones/puebla.php'
            ?>                                
            ];

            var sanAndresCholula = [
            <?php
            include 'funciones/sanAndresCholula.php'
            ?>                                
            ];

            var huehuetlanElChico = [
            <?php
            include 'funciones/huehuetlanElChico.php'
            ?>                                
            ];

            var huehuetlanElChico1 = [
            <?php
            include 'funciones/huehuetlanElChico1.php'
            ?>                                
            ];

            var jonotla = [
            <?php
            include 'funciones/jonotla.php'
            ?>                                
            ];  

            var jonotla1 = [
            <?php
            include 'funciones/jonotla1.php'
            ?>                                
            ];

            var tecomatlan = [
            <?php
            include 'funciones/tecomatlan.php'
            ?>                                
            ];    

            var tecomatlan1 = [
            <?php
            include 'funciones/tecomatlan1.php'
            ?>                                
            ]; 

            var zoquiapan = [
            <?php
            include 'funciones/zoquiapan.php'
            ?>                                
            ];  

            var zoquiapan1 = [
            <?php
            include 'funciones/zoquiapan1.php'
            ?>                                
            ]; 

            var amozoc = [
            <?php
            include 'funciones/amozoc.php'
            ?>                                
            ];

            var petlalcingo = [
            <?php
            include 'funciones/petlalcingo.php'
            ?>                                
            ]; 

            var sanFelipeTeotlalcingo = [
            <?php
            include 'funciones/sanFelipeTeotlalcingo.php'
            ?>                                
            ]; 

            var sanMiguelXoxtla = [
            <?php
            include 'funciones/sanMiguelXoxtla.php'
            ?>                                
            ]; 

            
            
            

            



            


            


            



            
            
      
            
            /*MALAS
            aljojuca,
            amixtlan,
            atempan,
            */

            map.data.add({geometry: new google.maps.Data.Polygon([Puebla,acateno,ahuatlan,juanNMendez,sanJeronimoXayacatlan,sanJoseChiapa,huitzilanDeSerdan,sanJuanAtenco,sanJuanAtzompa,sanPedroYeloixtlahuacan,sanPedroCholula,sanMiguelIxitlan,camocuautla,caxhuacan,coatzingo,cohuecan,coyomeapan,coyotepec,cuautempan,cuautlancingo,cuyoaco,chalchicomulaDeSesma,chapulco,chiconcuautla,chignahuapan,chignautla,chila,chilaDeLaSal,chinantla,epatlan,laMagdalenaTlatlauquitepec,sanSalvadorElSeco,sanSalvadorElVerde,santaCatarinaTlaltempan,santaInesAhuatempan,santiagoMiahuatlan,huehuetlanElGrande,soltepec,tehuacan,tehuitzingo,tenampulco,teopantlan,tepangoDeRodriguez,tepemaxalco,tepeojuma,tepexiDeRodriguez,tepeyahualco,tetelaDeOcampo,tetelesDeAvilaCastillo,teziutlan,tianguismanalco,tlahuapan,tlaltenango,tlanepantla,tlapacoya,tlapanala,tlaxco,totoltepecDeGuerrero,tulcingo,tuzamapanDeGaleana,vicenteGuerrero,xayacatlanDeBravo,xicotepec,xicotlan,xochiltepec,xochitlanDeVicenteSuarez,zacapoaxtla,zacatlan,zaragoza,zautla,zongozotla,xiutetelco,yehualtepec,tlacotepecDeBenitoJuarez,pantepec,chietla,atoyatempan,acatzingo,altepexi,coxcatlan,quecholac,tecamachalco,venustianoCarranza,acajete,generalFelipeAngeles,sanJoseMiahuatlan,tepancoDeLopez,zinacatepec,coronango,domingoArenas,tecaliDeHerrera,tochtepec,tepatlaxco,acatlan,acatlan1,atlixco,palmarDeBravo,rafaelLaraGrajales,rafaelLaraGrajales1,acteopan,ahuacatlan,ahuazotepec,aquixtla,atexcal,sanGregorioAtzompa,sanPabloAnicano,sanGabrielChilac,atzala,ayotoxcoDeGuerrero,coatepec,cohetzala,cuapiaxtlaDeMadero,cuautinchan,cuayucaDeAndrade,cuetzalanDelProgreso,chichiquila,chigmecatitlan,honey,chilchotla,eloxochitlan,hermenegildoGaleana,huauchinango,huejotzingo,hueyapan,atlequizayan,ixtepec,jolalpan,juanGalindo,mazapiltepecDeJuarez,caniadaMorelos,nauzontla,ocotepec,olintla,piaxtla,losReyesDeJuarez,sanAntonioCanida,sanMartinTotoltepec,sanMatiasTlalancaleca,sanNicolasBuenosAires,sanSebastianTlacotepec,santaIsabelCholula,santoTomasHueyotlipan,teotlalco,tepetzintla,tepexco,tepeyahualcoDeCuauhtemoc,tilapa,tlacuilotepec,tlachichuca,tlaola,tlatlauquitepec,tochimilco,tzicatlacoyan,xochiapulco,xochitlanTodosSantos,yaonahuac,zacapala,zapotitlan,zapotitlanDeMendez,zihuateutla,tepeaca,sanSalvadorHuixcolotla,izucarDeMatamoros,franciscoZMena,nealtican,chiautla,chiautla1,ocoyucan,ajalpan,juanCBonilla,huitziltepec,zoquitlan,sanMartinTexmelucan,chiautzingo,sanNicolasDeLosRanchos,jalpan,ixcaquixtla,naupan,molcaxac,lafragua,ixtacamaxtitlan,jopala,mixtla,ixcamilpaDeGuerrero,hueytamalco,sanFelipeTepatlan,puebla,sanAndresCholula,sanJeronimoTecuanipan,sanDiegoLaMesaTochimiltzingo,quimixtlan,pahuatlan,oriental,nopalucan,nicolasBravo,ahuehuetitla,axutla,hueytlalpan,huatlatlauca,albinoZertuche,atzitzihuacan,atzitzintla,calpan,huaquechula,libres,guadalupeVictoria,guadalupe,esperanza,huehuetlanElChico,caltepec,caltepec1,huehuetla,huehuetla1,huehuetlanElChico1,jonotla,jonotla1,tecomatlan,tecomatlan1,zoquiapan,zoquiapan1,amozoc,petlalcingo,aljojuca,amixtlan,atempan,sanFelipeTeotlalcingo,sanMiguelXoxtla])})
    }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNKdOzQ5ZtVXRKaZ9rJXcARys-zn4T0GM&callback=initMap">
    </script>
    <footer>
    	<h2>CIC Centro de integracion Ciudadana</h2>
    </footer>
  </body>
</html>
