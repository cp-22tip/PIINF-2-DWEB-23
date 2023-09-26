$(function (){
    $('table').css('margin', 'auto').css('margin-top',' 100px').css('border','solid 2px black');
    $('td').css('border', 'solid 2px black');
    $('h1').text('Le morpion').css('color', 'black').css('border', 'solid black 2px').css('text-align', 'center');

    var turn = 0;
    var player = 0;
    var winner;
    var $cell;
    var map = ['2','2','2','2','2','2','2','2','2',];





    $('td').on('click', function (){
        if($(this).hasClass('symbole_0') === false && $(this).hasClass('symbole_1') === false){

            $(this).addClass('symbole_' +player);
            Calcul();
            if (player === 0){
                player = 1;
            }
            else{
                player = 0;
            }

            turn ++;
        }

    });
    function Calcul(){

        for (let i = 0; i < 9; i++) {

            $cell = $('td:eq('+i+')');

            if($cell.hasClass('symbole_0')){
                map[i] = 0;
            }
            else if($cell.hasClass('symbole_1')){
                map[i] = 1;
            }
            else{
                map[i] = 2;
            }

        }

        if(map[0] === player && map[1] === player && map[2] === player){
            Victoire();
        }
        else if(map[3] === player && map[4] === player && map[5] === player){
            Victoire();
        }
        else if(map[6] === player && map[7] === player && map[8] === player){
            Victoire();
        }
        else if(map[0] === player && map[3] === player && map[6] === player){
            Victoire();
        }
        else if(map[1] === player && map[4] === player && map[7] === player){
            Victoire();
        }
        else if(map[2] === player && map[5] === player && map[8] === player){
            Victoire();
        }
        else if(map[0] === player && map[4] === player && map[8] === player){
            Victoire();
        }
        else if(map[2] === player && map[4] === player && map[6] === player){
            Victoire();
        }
        else if (turn >= 9){
            Egalite();
        }


    }
    function Victoire(){
        winner = player + 1;
        alert('le joueur '+winner+' a gagné');
        Reset();
    }


    function Egalite(){
        alert('Egalité');
        Reset();
    }


    function Reset(){
        $('td').removeClass('symbole_0 symbole_1')
        map.length = 0;
        turn = 0;
    }
});

