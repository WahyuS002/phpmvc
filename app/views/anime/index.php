<div class="container mt-3">

    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
    Add Anime
    </button>

    <br><br>

    <h3>Anime</h3>

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

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    <form action="<?= BASEURL;?>/anime/tambahAnime" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="score">Score</label>
            <input type="text" class="form-control" id="score" name="score">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="icon">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
        <div class="form-group">
            <label for="aired">Aired</label>
            <input type="text" class="form-control" id="aired" name="aired">
        </div>
        <div class="form-group">
            <label for="episodes">Episodes</label>
            <input type="text" class="form-control" id="episodes" name="episodes">
        </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Anime</button>
        </div>
      </form>
    </div>
  </div>
</div>