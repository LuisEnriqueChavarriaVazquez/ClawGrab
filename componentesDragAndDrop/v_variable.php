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
        height: auto;
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
</style>