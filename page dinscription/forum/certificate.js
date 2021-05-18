window.addEventListener('load', () => { 

    var name = JSON.parse(localStorage.getItem('NAME'));
    var surname = JSON.parse(localStorage.getItem('SURNAME'));


for(let i=0 ; i< name.length ; i++ )
    {document.getElementById('p').innerHTML +="<li class='frame' ><div class='frame2' ><span class='title'>Certificate of Participation</span><br><br><span style='font-size:25px'><i>This is to certify that</i></span><br><br> <div class='name'><span style=' font-size:50px'>"+ name [i]+"&nbsp;"+ surname [i]+"</span></div><br/><br/><span style=font-size:25px><i>has participated in the event</i></span> <br/><br/> <span style='font-size:30px'>event name</span> <br/><br/>  <span style='font-size:25px'><i>dated</i></span><br>  <span style='font-size:30px'> 30 mars 2020</span> </div> <a class=' but d-print-none'>Print</a> </li>"+"<br>";
    

}


$("ul#p").on('click', function(e){
    var target = $(e.target);
    if(target.hasClass("but")){
        var printElement= target.closest(".frame");
        console.log(printElement[0])
        document.getElementById("printelement").appendChild(target.closest(".frame")[0]);
        document.getElementById("container").style.display="none"
        window.print()
        location.reload()
    }
})

})

