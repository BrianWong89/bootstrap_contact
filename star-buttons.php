<nav>
    <ul class="nav">
        <li>
            <a href="#">
                <span class="bigger-text">1</span>
                <span class="screen-reader-text">Home</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="bigger-text">2</span>
                <span class="screen-reader-text">Settings</span>
            </a></li>
        <li>
            <a href="#">
                <span class="bigger-text">3</span>
                <span class="screen-reader-text">Refresh</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="bigger-text">4</span>
                <span class="screen-reader-text">Location</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="bigger-text">5</span>
                <span class="screen-reader-text">Location</span>
            </a>
        </li>
    </ul>
</nav>​

<style>
    .bigger-text {
        font-size: 100px;
    }
    .screen-reader-text {
        position: absolute;
        top: -9999px;
        left: -9999px;
    }

    @font-face {
        font-family: 'fontello';
        src: url('https://css-tricks.com/examples/RoundButtons/fonts/fontello.eot');
        src: url('https://css-tricks.com/examples/RoundButtons/fonts/fontello.eot?#iefix') format('embedded-opentype'),
        url('https://css-tricks.com/examples/RoundButtons/fonts/fontello.woff') format('woff'),
        url('https://css-tricks.com/examples/RoundButtons/fonts/fontello.ttf') format('truetype'),
        url('https://css-tricks.com/examples/RoundButtons/fonts/fontello.svg#fontello') format('svg');
        font-weight: normal; font-style: normal;
    }

    [class*="icon-"] {
        font-family: 'fontello';
        font-style: normal;
        font-size: 3em;
        speak: none;
    }

    .icon-home:after     { content: "\2302"; }
    .icon-cog:after      { content: "\2699"; }
    .icon-cw:after       { content: "\27f3"; }
    .icon-location:after { content: "\e724"; }

    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing:    border-box;
        box-sizing:         border-box;
        margin: 0;
        padding: 0;
    }
    /*
    html {
        background: #f7f7f7 url(https://css-tricks.com/examples/RoundButtons/images/bg.png) repeat center top;
    }
    */

    .nav {
        list-style: none;
        text-align: center;
    }

    .nav li {
        position: relative;
        display: inline-block;
        margin-right: -4px;
    }

    /*
    .nav li:before {
        content: "";
        display: block;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #fff;
        width: 100%;
        height: 1px;
        position: absolute;
        top: 50%;
        z-index: -1;
    }
    */

    .nav a:link, .nav a:visited {
        display: block;
        text-decoration: none;
        background-color: #f7f7f7;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#f7f7f7), to(#e7e7e7));
        background-image: -webkit-linear-gradient(top, #f7f7f7, #e7e7e7);
        background-image: -moz-linear-gradient(top, #f7f7f7, #e7e7e7);
        background-image: -ms-linear-gradient(top, #f7f7f7, #e7e7e7);
        background-image: -o-linear-gradient(top, #f7f7f7, #e7e7e7);
        color: #a7a7a7;
        margin: 36px;
        width: 144px;
        height: 144px;
        position: relative;
        text-align: center;
        line-height: 144px;
        border-radius: 50%;
        box-shadow: 0px 3px 8px #aaa, inset 0px 2px 3px #fff;
        border: solid 1px transparent;
    }

    .nav a:before {
        content: "";
        display: block;
        background: #4cae4c;
        border-top: 2px solid #4cae4c;
        position: absolute;
        top: -18px;
        left: -18px;
        bottom: -18px;
        right: -18px;
        z-index: -1;
        border-radius: 50%;
        box-shadow: inset 0px 8px 48px #4cae4c;
    }

    .nav a:active {
        box-shadow: 0px 3px 4px #aaa inset, 0px 2px 3px #4cae4c;
    }

    .nav a:hover {
        text-decoration: none;
        color: #555;
        background: #f5f5f5;
    }​
</style>