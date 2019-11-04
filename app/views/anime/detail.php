<div class="container">
    <div class="card" style="width: 18rem;">
    <img src="<?= BASEURL;?>/img/anime/<?= $data["anime"]["icon"]?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $data["anime"]["title"]?></h5>
        <p class="card-text"><?= $data["anime"]["description"]?></p>
        <a href="<?= BASEURL;?>/anime" class="btn btn-primary">Back</a>
    </div>
    </div>
</div>