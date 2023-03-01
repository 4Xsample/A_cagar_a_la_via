
|               |               |               |               |               |               |
|:-------------:|:-------------:|:-------------:|-------------:|-------------:|-------------:|
| ![Hack the planet](https://img.shields.io/badge/Hack-The%20Planet-orange) | [![Discord](https://img.shields.io/discord/667340023829626920?logo=discord)](https://discord.gg/ahVq54p) | [![Twitter](https://img.shields.io/twitter/follow/4xsample?style=social&logo=twitter)](https://twitter.com/4xsample/follow?screen_name=shields_io) | [![4Xsample@mastodon.social](https://img.shields.io/badge/Mastodon-@4Xsample-blueviolet?style=for-the-badge&logo=mastodon)](https://mastodon.social/@4Xsample) | [![4Xsample](https://img.shields.io/badge/Twitch-4Xsample-6441A4?style=for-the-badge&logo=twitch)](https://twitch.tv/4Xsample) | [![PayPal](https://img.shields.io/badge/PayPal-00457C?style=for-the-badge&logo=paypal&logoColor=white)](https://www.paypal.com/donate/?hosted_button_id=EFVMSRHVBNJP4) |


# A cagar a la via
## El plugin per OBS més burro del mercat.
###  I si t'ofen ves a cagar a la via!!!

[StreamUp.tips](https://streamup.tips/) té un fantàstic plugin per [OBS](https://obsproject.com) usant [Streamer.bot](https://streamer.bot) inspirat en el joc [Cards Against Humanity](https://www.cardsagainsthumanity.com) que es pot descarregar [aquí](https://streamup.tips/product/cards-against-humanity).
<details>
    <summary>Clicka per saber que collons es "Cards against humanity"?.</summary>
    <em> El joc de cards against humanity és una manera de demostrar la teva creativitat i el teu sentit de l’humor negre. El joc consisteix a combinar targetes amb frases absurdes, ofensives o políticament incorrectes per crear situacions hilarants o escandaloses. Per exemple:


    Targeta negra: Què és el que mai falla per animar una festa?
    Targeta blanca: Una orgia sorpresa.

    Targeta negra: Què vaig aprendre en el meu viatge a Espanya?
    Targeta blanca: Que els toros són més intel·ligents que els toreros.

    Targeta negra: Què és el que més em fa falta en la vida?
    Targeta blanca: Un abraçada del Dalai Lama.
</em>
    El joc no té cap objectiu més que passar una bona estona i riure’s de tot. No hi ha guanyadors ni perdedors, només gent horrible.😈 

  </details>
</br>

Nosaltres, en català, podem trobar una magnífica traducció d'aquest joc anomenada [A cagar a la via](https://acagar.cat) així que toca adaptar el plugin a la nostre llengua.

Per tal de fer-ho cal veure com funciona el plugin de [StreamUp](https://streamup.tips/).

Aquest plugin fa dues consultes a dos apis proveïdes per [StreamUp.tips](https://streamup.tips/) a [https://api.streamup.tips/CardsAgainstHumanity/Black](https://api.streamup.tips/CardsAgainstHumanity/Black) i [https://api.streamup.tips/CardsAgainstHumanity/White](https://api.streamup.tips/CardsAgainstHumanity/White) i assigna aquestes consultes a un parell de variables i fa la seva màgia negra, així que la forma més senzilla de traduir-ho ha sigut crear els arxius white.php i black.php, pujar-los a qualsevol servidor propi i cambiar la direcció de la api.

Per ara es poden trobar aquestes apis a [http://4xsample.cat/A_cagar_a_la_via/black.php](http://4xsample.cat/A_cagar_a_la_via/black.php) i [http://4xsample.cat/A_cagar_a_la_via/white.php](http://4xsample.cat/A_cagar_a_la_via/white.php), no en garanteixo l'uptime ni res així que el meu consell és pujar els .php a qualsevol servidoret gratuït que tingueu i us manteniu vosaltres mateixos els llistats de cartes. Sempre podeu mirar de muntar-vos una [Maquina virtual gratuita de Oracle Cloud](https://github.com/4Xsample/Servidor-gratis-Oracle-Cloud)

Per copiar fàcil i rapidament els arxius d'aquest repostori al vostre servidor podeu usar la linea `sudo git clone https://github.com/4Xsample/A_cagar_a_la_via.git` des de la carpeta publica del vostre servidor web.

Si voleu fer servir les accions del plugin ja modificades al [Streamer.bot](https://streamer.bot) podeu copiar el text del arxiu `streamer.bot import.txt` en lloc del que proveeixen la gent de [StreamUp.tips](https://streamup.tips/) que te les meves apis posades i un parell de detalls afegits com per exemple que el bot escrigui automaticament la combinació de cartes al xat i a sobre ho digui en veu alta [TwitchSpeaker](https://streamer.bot) si el teniu configurat

Aquests arxius es proveeixen tal com estan i no en garanteixo manteniment.

Si trobeu aquests recursos útils i voleu donar suport a la meva feina, tingueu en compte fer una donació a través de PayPal (enllaç proporcionat a la insignia de dalt d'aquest readme).

Gràcies per passar!

![Powered by](http://4xsample.cat/A_cagar_a_la_via/StreamUP_Panel.png)

## Disclaimer: 
*Aquest codi s'ofereix tal com és i no es garanteix que funcioni correctament en totes les condicions. No em faig responsable dels danys que puguin resultar de l'ús d'aquesta informació. Utilitzeu-lo sota la vostra pròpia responsabilitat. Si teniu dubtes pregunteu i respondré al que pugui. Si voleu obrir proposar cambis podeu obrir fork i i voleu seguir-me, al panel del principi d'aquest readme podeu trobar links a les meves xarxes socials, Twitch i PayPal per si també voleu donar suport al meu treball.*
