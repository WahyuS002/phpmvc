<div class="container mt-4">

    <h3>Anime</h3>

    <table border="1" cellpadding="5">

        <?php foreach($data["anime"] as $anime):?>

        <?php endforeach;?>
    </table>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Icon</th>
            <th scope="col">Title</th>
            <th scope="col">Score</th>
            <th scope="col">More Info</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1?>
            <?php foreach($data["anime"] as $anime):?>
            <tr>
                <th><?= $i?></th>
                <td><img src="<?= BASEURL;?>/img/anime/<?= $anime["icon"]?>" width="50" alt=""></td>
                <td><?= $anime["title"]?></td>
                <td><?= $anime["score"]?></td>
                <td class=""><a href="<?= BASEURL;?>/anime/detail/<?= $anime["id"]?>" class="badge badge-primary">More Info</a></td>
            <?php $i++;?>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</div>