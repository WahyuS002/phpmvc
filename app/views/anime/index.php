<div class="container mt-4">

    <h3>Anime</h3>

    <table border="1" cellpadding="5">
        <tr>
            <th>Title</th>
            <th>Icon</th>
            <th>Category</th>
            <th>Aired</th>
            <th>Episodes</th>
        </tr>
        <?php foreach($data["anime"] as $anime):?>
        <tr>
            <td><?= $anime["title"]?></td>
            <td><img src="<?= BASEURL;?>/img/anime/<?= $anime["icon"]?>" width="50" alt=""></td>
            <td><?= $anime["category"]?></td>
            <td><?= $anime["aired"]?></td>
            <td><?= $anime["episodes"]?></td>
        </tr>
        <?php endforeach;?>
    </table>

</div>