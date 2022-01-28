<a href="https://www.paypal.com/donate/?hosted_button_id=EFVMSRHVBNJP4">
<img src="https://img.shields.io/badge/PayPal-00457C?style=for-the-badge&logo=paypal&logoColor=white" alt="PayPal"></a></br>

<a href="https://discord.gg/ahVq54p">
<img src="https://img.shields.io/discord/667340023829626920?logo=discord" alt="chat on Discord"></a></br>

<a href="https://twitter.com/4xsample/follow?screen_name=shields_io">
<img src="https://img.shields.io/twitter/follow/4xsample?style=social&logo=twitter" alt="follow on Twitter"></a>

# A cagar a la via
## El plugin per OBS més burro del mercat.
###  I si t'ofen ves a cagar a la via!!!

[StreamUp.tips](https://streamup.tips/) té un fantàstic plugin per [OBS](https://obsproject.com) usant [Streamer.bot](https://streamer.bot) inspirat en el joc [Cards Against Humanity](https://www.cardsagainsthumanity.com) que es pot descarregar [aquí](https://streamup.tips/product/cards-against-humanity).

Nosaltres, en català, podem trobar una magnífica traducció d'aquest joc anomenada [A cagar a la via](https://acagar.cat) així que toca adaptar el plugin a la nostre llengua.

Per tal de fer-ho cal veure com funciona el plugin de [StreamUp](https://streamup.tips/).

Aquest plugin fa dues consultes a dos apis proveïdes per [StreamUp.tips](https://streamup.tips/) a [https://api.streamup.tips/CardsAgainstHumanity/Black](https://api.streamup.tips/CardsAgainstHumanity/Black) i [https://api.streamup.tips/CardsAgainstHumanity/White](https://api.streamup.tips/CardsAgainstHumanity/White) i assigna aquestes consultes a un parell de variables i fa la seva màgia negra, així que la forma més senzilla de traduir-ho ha sigut crear els arxius white.php i black.php, pujar-los a qualsevol servidor propi i cambiar la direcció de la api.

Per ara es poden trobar aquestes apis a [http://4xsample.fun/A_cagar_a_la_via/black.php](http://4xsample.fun/A_cagar_a_la_via/black.php) i [http://4xsample.fun/A_cagar_a_la_via/white.php](http://4xsample.fun/A_cagar_a_la_via/white.php), no en garanteixo l'uptime ni res així que el meu consell és pujar els .php a qualsevol servidoret gratuït que tingueu i us manteniu vosaltres mateixos els llistats de cartes. Sempre podeu mirar de muntar-vos una [Maquina virtual gratuita de Oracle Cloud](https://github.com/4Xsample/Servidor-gratis-Oracle-Cloud)

Per copiar fàcil i rapidament els arxius d'aquest repostori al vostre servidor podeu usar la linea `sudo git clone https://github.com/4Xsample/A_cagar_a_la_via.git` des de la carpeta publica del vostre servidor web.

Si voleu fer servir les accions del plugin ja modificades podeu copiar el text del arxiu `streamer.bot import.txt` en lloc del que proveeixen la gent de [StreamUp.tips](https://streamup.tips/) que te les meves apis posades i un parell de detalls afegits com per exemple que el bot escrigui automaticament la combinació de cartes al xat i a sobre ho digui en veu alta [TwitchSpeaker](https://streamer.bot) si el teniu configurat

Aquests arxius es proveeixen tal com estan i no en garanteixo manteniment.