<div class="piezaUno">
        <div>Dar a &nbsp;</div>
        <div><input type="text" class="browser-default truncate"></div>
        <div>el valor de</div>
        <div><input type="text" class="browser-default truncate"></div>
</div>

<style>
    .piezaUno {
        height: 60px;
        min-width: 200px;
        max-width: 400px;
        margin: 0px;
        padding: 18px;
        background-color: #eabe3a;
        clip-path: polygon(0 0, 15% 0, 15% 18%, 35% 18%, 35% 0, 100% 0, 100% 85%, 36% 85%, 36% 100%, 15% 100%, 15% 85%, 0% 85%);

        display: flex;
        justify-content:left;
        flex-direction: row;
    }

    .piezaUno:nth-child(1n) > input,.piezaUno:nth-child(4n) > input{
        width: 20px;
    }
</style>