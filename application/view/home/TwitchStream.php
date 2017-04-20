<style>
    .embedVideo {
        position:relative;
        padding-bottom:60.0%;
        height:0;
    }
    .embedVideo iframe{
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        border:0;
    }



    .intrinsic-container {
        position: relative;
        height: 500px;
        overflow: hidden;
    }

    /* 16x9 Aspect Ratio */
    .intrinsic-container-16x9 {
        padding-bottom: 56.25%;
    }

    /* 4x3 Aspect Ratio */
    .intrinsic-container-4x3 {
        padding-bottom: 75%;
    }

    .intrinsic-container iframe {
        position: absolute;
        top:0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<div class="container">
    <div class="section">
        <div class="row center-align">
            <div class="col s12 m6 l8">
                <div class="embedVideo">
                <iframe src="http://player.twitch.tv/?channel=twitchplayspokemon&muted=true">
                </iframe>
                </div>
            </div>
            <div class="col s12 m6 l">
                <div class="intrinsic-container">
                    <iframe frameborder="0"
                             scrolling="no"
                             id="chat_embed"
                             src="http://www.twitch.tv/twitchplayspokemon/chat"
                             >
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
