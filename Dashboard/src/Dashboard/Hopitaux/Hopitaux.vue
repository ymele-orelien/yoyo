<template>
    <div class="pagetitle">
        <h1>Centres Hospitaliers</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accuiel</a></li>
                <li class="breadcrumb-item">Nos hospitaux</li>
                <li class="breadcrumb-item active">listes des centres hospitaliers</li>
            </ol>
        </nav>
    </div>
    <div class="hospitaux">
        <h4><i class="fa-solid fa-hospital"></i> Hospitaux
        </h4>
        <div class="partie">
            <div class="pa">
                <div class="pa1">
                    <div class="image">
                        <img src="../../assets/img/card.jpg" alt="">
                        <b class="name-hopital">Hopital generale de douala</b>
                    </div>
                    <div class="wrapper">
                        <div class="icon phone">
                            <div class="tootltip">+237652959389</div>
                            <span><i class="fa-solid fa-phone  "></i></span>
                        </div>
                        <div class="icon twitter">
                            <div class="tootltip">twitter</div>
                            <span><i class="fa-brands fa-at  "></i></span>
                        </div>
                        <div class="icon instagram">
                            <div class="tootltip ">117-pk14</div>
                            <span><i class="fa-solid fa-location-dot"></i></span>
                        </div>
                        <div class="icon youtube">
                            <div class="tootltip">02/06/2003</div>
                            <span><i class="fa-solid fa-calendar"></i></span>
                        </div>
                        <div class="icon github">
                            <div class="tootltip"> Github</div>
                            <span><i class="fa-brands fa-github"></i></span>
                        </div>
                    </div>
                </div>
                <div class="disc-activite">
                    <div class="disc">
                        <div class="fa-regular fa-comments"> Ecrire un message</div>
                    </div>
                </div>
            </div>
            <div class="pb">
                dsfdsfsd
            </div>

        </div>
    </div>
</template>
<script>
</script>
<style>
.hospitaux {
    

    height: 100vh;
    padding: 1rem;
    border-radius: 5px;
}

.hospitaux h4 {
    color: #798eb3;
}

.p1 {

    height: 60%;
    height: 100%;
}

.partie {
 
    justify-content: space-between;
    display: flex;
}

.pa {
   
    width: 45%;
    background: #fff;
    padding: 1rem;
}

.pb {
    border: 1px solid rgb(128, 0, 0);
    width: 50%;
    margin-left: 1rem;
    background: #fff;
}

.image img {
    height: 420px;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
}

.disc {
    border: 1px solid blue;
    background: #05074b;
    display: flex;
    justify-content: center;
    color: #fff;
    border-radius:6px ;
    padding: 1rem;
}

.wrapper {
    display: inline-flex;
    margin: 2rem;
}

.wrapper .icon {
    cursor: pointer;
    margin: 0 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    z-index: 2;
    position: relative;
}

.wrapper .icon span {
    position: relative;
    height: 60px;
    width: 60px;
    background: #fff;
    border-radius: 5px;
    display: block;
    text-align: center;
    z-index: 2;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
}

.wrapper .icon span i {
    font-size: 25px;
    line-height: 60px;
}

.tootltip {
    position: absolute;
    top: 0px;
    border-radius: 25px;
    padding: 10px 18px;
    font-size: 15px;
    background: #fff;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
    opacity: 0;
    pointer-events: none;
    transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .icon:hover .tootltip {
    opacity: 1;
    top: -70px;
    pointer-events: auto;
    color: #fff;
}

.wrapper .icon:hover span,
.wrapper .icon:hover .tootltip {
    text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.4);
}

.tootltip::before {
    transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    position: absolute;
    content: "";
    height: 15px;
    width: 15px;
    background: #fff;
    bottom: -8px;

    left: 50%;
    transform: translate(-50%) rotate(45deg);
}

.wrapper .phone:hover span,
.wrapper .phone:hover .tootltip,
.wrapper .phone:hover .tootltip::before {
    background: #3b5999;
}

.wrapper .instagram:hover span,
.wrapper .instagram:hover .tootltip,
.wrapper .instagram:hover .tootltip::before {
    background: #e1306c;

}

.wrapper .twitter:hover span,
.wrapper .twitter:hover:hover .tootltip,
.wrapper .twitter:hover .tootltip::before {
    background: #46c1f6;

}

.wrapper .icon:hover span i {
    color: #fff;
}

.wrapper .youtube:hover span,
.wrapper .youtube:hover .tootltip,
.wrapper .youtube:hover .tootltip::before {
    background: #de463b;

}

.wrapper .github:hover span,
.wrapper .github:hover .tootltip,
.wrapper .github:hover .tootltip::before {
    background: #000;

}</style>