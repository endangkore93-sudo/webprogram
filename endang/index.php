<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh js-css</title>
<style>
    body{
        transition: background-color 0.4s ease, color 0.4s ease;
        background-color: #f5f5f5f;
        color: #333;
        font-family: arial;
        margin:0;
        padding: 20px;
    }
    body.mode-gelap{
        background-color: #050507;
        color: #6d68ac
    }
    .pesan-tersembunyi{
        display: none;
    }
    .pesan-tampil{
        display: block;
        background-color: #fff;
        color: #179351;
        padding: 10px;
    }
    #btn-tampil{
        margin-top: 15px;
        padding: 10px 15px;
        border: none;
        border-radius: 6px;
        font-weight: bold;
        cursor: pointer;
    }
    #btn-tampil:hover{
        background-color: #c45;
    }
    .nav-tema{
        text-align: center;
        margin:20px 0;
    }
    #btn-tema{
        padding: 12px 24px;
        font-size: 16px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        background-color: #333;
        color: #fff;
        transition: all 0.3s;
    }
    #btn-tema:hover{
        transform:scale(1.05);
    }
</style>
</head>
<body>
    
<div class="nav-tema">
    <button id="btn-tema">mode gelap</button>
</div>
<div id="pesan-sistem" class="pesan-tersembunyi">
    <p>
        <stong>belajar dom javascript dan css</strong>
    </p>
</div>
<button id="btn-tampil">tampil pesan</button>

<script>
    const tmb = document.getElementById("btn-tampil");
    const psn = document.getElementById("pesan-sistem");
    const tmbtema = document.getElementById("btn-tema");

    tmb.addEventListener('click',function(){
        if(psn.classList.contains('pesan-tersembunyi')){
            psn.classList.remove('pesan-tersembunyi');
            psn.classList.add('pesan-tampil');
            tmb.innerText ="Sembunyikan pesan";
        }else{
             psn.classList.remove('pesan-tampil');
            psn.classList.add('pesan-tersembunyi');
            tmb.innerText ="Tampilkan pesan";
        }
    });
    tmbtema.addEventListener('click',function(){
        document.body.classList.toggle('mode-gelap');
        
        if(document.body.classList.contains('mode-gelap')){
            tmbtema.innerText="mode terang"
        }else{
            tmbtema.innerText= "mode gelap"
        }
    });
</script>
</body>
</html>