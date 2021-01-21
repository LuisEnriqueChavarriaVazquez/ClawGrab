<style>
    .varContainer{
        height: 65px;
        width: 125px;
        border-radius: 10px;
        background-color: #546e7a ;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .valor {
        height: 25px;
        width: 65px;
        border-radius: 5px;
        background-color: white;
        border: none;

        padding-left: 5px;
        padding-right: 5px;

        font-weight: 600;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .valor:focus{
        outline: none;
    }

    .mainBoxDraggers{
        width: 100% !important;
        height: 2500px !important;
        padding: 10px 100px 30px 30px !important;
    }

    .adjustCardMine{
        padding: 0px 0px 0px 0px !important;
    }

    .tagGrap {
        filter: drop-shadow(1px 10px 10px rgba(0,0,0,0.29));
        -webkit-filter: drop-shadow(1px 10px 10px rgba(0,0,0,0.29));
        -moz-filter: drop-shadow(1px 10px 10px rgba(0,0,0,0.29));
        
    }

    .piezaUno {
        height: 65px;
        width: 285px;
        margin-bottom: 20px;
        padding: 20px 17px 17px 17px;
        color: white;
        background-color: #1b5e20;
        clip-path: polygon(0 0, 15% 0, 15% 18%, 35% 18%, 35% 0, 100% 0, 100% 85%, 36% 85%, 36% 100%, 15% 100%, 15% 85%, 0% 85%);

        display: flex;
        justify-content: center;
    }

    .piezaDos {
        height: 65px;
        width: 185px;
        margin: 0px;
        padding: 18px 17px 17px 17px;
        color: white;
        background-color: #2e7d32 ;
        clip-path: polygon(0 0, 15% 0, 15% 13%, 45% 13%, 45% 0, 100% 0, 100% 85%, 45% 85%, 45% 95%, 15% 95%, 15% 85%, 0% 85%);

        display: flex;
        justify-content: center;
    }

    .padreElement{
        display: flex;
        flex-direction: column;
    }

    .operatorSpace{
        height: 25px;
        width: 65px;
        border-radius: 200px;
        background-color: white;
        color: black;

        padding-left: 5px;
        padding-right: 5px;

        font-weight: 600;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .sentenciaIf{
        clip-path: polygon(0 0, 0 100%, 100% 100%, 100% 91%, 46% 92%, 46% 100%, 100% 100%, 100% 64%, 24% 65%, 24% 37%, 100% 37%, 100% 0, 46% 0, 46% 10%, 25% 10%, 25% 0);
        background-color: #311b92 ;
        width: 250px;
        height: 160px;
        padding: 10px;
        color: #fff;
    }

    .sentenciaIf > input:first-child{
        position: relative;
        width: 180px;
        top: -5px;
        right: -40px;
    }

    .sentenciaIf > input:last-child{
        position: relative;
        width: 180px;
        top: -5px;
        right: -40px;
    }


    .inicioElemento{
        height: 65px;
        width: 185px;
        margin: 0px;
        padding: 18px 17px 17px 17px;
        color: white;
        background-color: #e65100  ;
        clip-path: polygon(0% 15%, 0 0, 15% 0%, 85% 0%, 100% 0, 100% 15%, 100% 84%, 42% 84%, 42% 100%, 15% 100%, 15% 85%, 0 86%);

        display: flex;
        justify-content: right;
    }

    .finElemento{
        height: 65px;
        width: 185px;
        margin: 0px;
        padding: 25px 17px 17px 17px;
        color: white;
        background-color: #bf360c ;

        display: flex;
        justify-content: right;
        clip-path: polygon(0% 15%, 0 0, 16% 0, 16% 15%, 41% 15%, 41% 0, 100% 0, 100% 100%, 42% 100%, 15% 100%, 0 100%, 0 86%);
    }

    .randomPieza{
        height: 65px;
        width: 285px;
        margin-bottom: 20px;
        padding: 20px 17px 17px 17px;
        color: white;
        background-color: #1a237e ;
        clip-path: polygon(0 0, 15% 0, 15% 18%, 35% 18%, 35% 0, 100% 0, 100% 85%, 36% 85%, 36% 100%, 15% 100%, 15% 85%, 0% 85%);

        display: flex;
        justify-content: center;
    }

    .importElemento{
        height: 65px;
        width: 185px;
        margin: 0px;
        padding: 18px 17px 17px 17px;
        color: white;
        background-color: #d50000;
        clip-path: polygon(0 0, 15% 0, 15% 13%, 45% 13%, 45% 0, 100% 0, 100% 85%, 45% 85%, 45% 95%, 15% 95%, 15% 85%, 0% 85%);

        display: flex;
        justify-content: center;
    }

    .ifelseElement{
        background-color: #311b92 ;
        width: 250px;
        height: 200px;
        padding: 10px;
        color: #fff;
        clip-path: polygon(0 89%, 0 100%, 24% 100%, 39% 100%, 75% 100%, 100% 100%, 100% 77%, 24% 77%, 24% 61%, 100% 60%, 100% 40%, 23% 40%, 23% 24%, 100% 23%, 100% 0, 38% 0%, 27% 0, 15% 0, 0 0);
    }
    

</style>