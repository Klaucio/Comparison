// new Vue({
//     el: '#bank-form',
//     data: {
//         checkedBanks: []
//     }
// });

$(document).ready(function(e){
    $(".bank-check").click(function(){
        $(this).toggleClass("check");
    });
});

// second option for seclectable tiles

$(function() {
    $('#search').on('keyup', function() {
        var pattern = $(this).val();
        $('.searchable-container .items').hide();
        $('.searchable-container .items').filter(function() {
            return $(this).text().match(new RegExp(pattern, 'i'));
        }).show();
    });
});

// function handleClick(cb) {
//     if(cb.checked==false){
//
//         var parent=document.getElementById('parentH5');
//         parent.removeChild(document.getElementById('results'))
//         console.log("Elimine me")
//         return;
//     }
//     display(cb.value);
//     Console.log("Passando");
//
// }
// function display(msg) {
//     var p = document.createElement('p');
//     p.innerHTML = msg;
//     document.body.appendChild(p);
//     var d = document.getElementById('results');
//     d.innerHTML = msg;
//     document.p.appendChild(d);
//
//     // var resulcard = document.createElement(document.getElementById('resultCard'));
//     // document.getElementById('resultName').innerHTML = msg;
//     // document.getElementById('allResuls').appendChild(resulcard);
// }

function showIt() {
    for (var index in bank_data) {
        var obj = bank_data[index];
        console.log(obj.nome);
        // ...
    }

}

// $('.close-icon').on('click',function() {
//     $(this).closest('.card').fadeOut();
// })
$('.close').on('click',function() {
    $(this).closest('.items').fadeOut();
})