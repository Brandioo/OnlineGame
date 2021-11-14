
{{--SideBar--}}
<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Online Game</span>
                </div>
            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Home</a>
                </li>
                <li>
                    <a href="/dashboard"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                    <a class="show-cat-btn" href="/fights">
                        <span class="icon folder" aria-hidden="true"></span>Fight History
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="show-cat-btn" href="/itemhistory">
                        <span class="icon image" aria-hidden="true"></span>Item History
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="show-cat-btn" href="/rank">
                        <span class="icon paper" aria-hidden="true"></span>Rank
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <font face="courier" size="50">
        <embed src="/assets/logo/white_logo_transparent_background.png" width="200" height="220" alt="../../../public/assets/logo/white_logo_transparent_background.png">
    </font>

</aside>

<style>

    @keyframes move {
        0% {
            box-shadow: 0 0 var(--boxShadow) #0f0, inset 0 0 var(--boxShadow) #0f0;
            filter: hue-rotate(0deg);
        }
        20% {
            box-shadow: 0 0 60px #0f0, inset 0 0 60px #0f0;
        }

        40% {
            box-shadow: 0 0 40px #0f0, inset 0 0 40px #0f0;
        }
        60% {
            box-shadow: 0 0 80px #0f0, inset 0 0 80px #0f0;
        }
        80% {
            box-shadow: 0 0 100px #0f0, inset 0 0 100px #0f0;
        }
        100% {
            box-shadow: 0 0 var(--boxShadow) #0f0, inset 0 0 var(--boxShadow) #0f0;
            filter: hue-rotate(360deg);
        }
    }

    svg {
        width: 0;
        height: 0;
    }

    .center {
        text-align: center;
    }

    body {
        margin: 0;
    }

    @-webkit-keyframes glowing {
        0% {
            background-color: #0091b2;
            -webkit-box-shadow: 0 0 3px #0091b2;
        }
        50% {
            background-color: #21c7ed;
            -webkit-box-shadow: 0 0 15px #21c7ed;
        }
        100% {
            background-color: #0091b2;
            -webkit-box-shadow: 0 0 3px #0091b2;
        }
    }

    @keyframes glowing {
        0% {
            background-color: #0091b2;
            box-shadow: 0 0 3px #0091b2;
        }
        50% {
            background-color: #21c7ed;
            box-shadow: 0 0 15px #21c7ed;
        }
        100% {
            background-color: #0091b2;
            box-shadow: 0 0 3px #0091b2;
        }
    }

    embed {
        fill: blue;
        -webkit-animation: glowing-embed 1300ms infinite;
        -moz-animation: glowing-embed 1300ms infinite;
        -o-animation: glowing-embed 1300ms infinite;
        animation: glowing-embed 1300ms infinite;
    }

    @-webkit-keyframes glowing-embed {
        0% {
            fill: #0091b2;
            -webkit-filter: drop-shadow(0 0 3px #0091b2);
        }
        50% {
            fill: #21c7ed;
            -webkit-filter: drop-shadow(0 0 15px #21c7ed);
        }
        100% {
            fill: #0091b2;
            -webkit-filter: drop-shadow(0 0 3px #0091b2);
        }
    }

    @keyframes glowingEmbed {
        0% {
            fill: #0091b2;
            filter: drop-shadow(0 0 3px #0091b2);
        }
        50% {
            fill: #21c7ed;
            filter: drop-shadow(0 0 15px #21c7ed);
        }
        100% {
            fill: #0091b2;
            filter: drop-shadow(0 0 3px #0091b2);
        }
    }

    /*.footer {*/
    /*    background-image: url(https://i.pinimg.com/originals/ff/46/3f/ff463f7a1f926bbde7d50f05b546a0ef.jpg);*/
    /*    background-repeat: no-repeat;*/
    /*    background-size: cover;*/
    /*    text-decoration-width: auto;*/
    /*    padding: 20px;*/
    /*    margin-top: 20px;*/
    /*    align: center;*/
    /*    color: #0aa9e7;*/
    /*}*/
</style>
